<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo';
$db_nombre_pagina = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta';

$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
	if(trim($hdn_id) != '') $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setId($hdn_id, false);
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setDescripcion(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_descripcion"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeId(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id", null));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE771Itipopvn(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e771_itipopvn"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE772Ddestipopvn(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e772_ddestipopvn"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE773Dchasis(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e773_dchasis"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE774Dcolor(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e774_dcolor"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE775Dpotencia(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e775_dpotencia"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE776Dcapmot(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e776_dcapmot"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE777Dpnet(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e777_dpnet"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE778Dpbruto(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e778_dpbruto"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE779Itipcom(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e779_itipcom"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE780Ddestipcom(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e780_ddestipcom"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE781Dnromotor(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e781_dnromotor"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE782Dcaptracc(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e782_dcaptracc"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE783Danofab(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e783_danofab"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE784Ctipveh(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e784_ctipveh"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE785Dcapac(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e785_dcapac"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE786Dcilin(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e786_dcilin"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCodigo(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_codigo"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setObservacion(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txa_observacion"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setOrden(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_orden", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_estado", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_creado")));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreadoPor(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo__creado_por", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_modificado")));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificadoPor(Gral::getVars(1, "eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo__modificado_por", 0));

	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_estado = new EkuDeE770GDtipDEGCamItemGVehNuevo();
	if(trim($hdn_id) != ''){
		$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_estado->setId($hdn_id);
		$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_estado->getEstado());
				
	}else{
		$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->control();
			if(!$error->getExisteError()){
				$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta.php?cs=1&id='.$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->control();
			if(!$error->getExisteError()){
				$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta.php?cs=1');
				$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
			}
		break;
	}
	Gral::setSes('EkuDeE770GDtipDEGCamItemGVehNuevo_ULTIMO_INSERTADO', $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id', 0);
	if($cmb_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id != 0){
		$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($cmb_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id);
	}else{
	
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE771Itipopvn(Gral::getVars(2, "eku_e771_itipopvn", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE772Ddestipopvn(Gral::getVars(2, "eku_e772_ddestipopvn", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE773Dchasis(Gral::getVars(2, "eku_e773_dchasis", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE774Dcolor(Gral::getVars(2, "eku_e774_dcolor", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE775Dpotencia(Gral::getVars(2, "eku_e775_dpotencia", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE776Dcapmot(Gral::getVars(2, "eku_e776_dcapmot", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE777Dpnet(Gral::getVars(2, "eku_e777_dpnet", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE778Dpbruto(Gral::getVars(2, "eku_e778_dpbruto", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE779Itipcom(Gral::getVars(2, "eku_e779_itipcom", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE780Ddestipcom(Gral::getVars(2, "eku_e780_ddestipcom", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE781Dnromotor(Gral::getVars(2, "eku_e781_dnromotor", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE782Dcaptracc(Gral::getVars(2, "eku_e782_dcaptracc", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE783Danofab(Gral::getVars(2, "eku_e783_danofab", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE784Ctipveh(Gral::getVars(2, "eku_e784_ctipveh", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE785Dcapac(Gral::getVars(2, "eku_e785_dcapac", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE786Dcilin(Gral::getVars(2, "eku_e786_dcilin", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(), '...'), $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItemId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e771_itipopvn" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e771_itipopvn' ?>" >
				  
                                        <?php Lang::_lang('eku_e771_itipopvn', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e771_itipopvn" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e771_itipopvn')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e771_itipopvn' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e771_itipopvn' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE771Itipopvn(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e771_itipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e771_itipopvn', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e771_itipopvn', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e771_itipopvn', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e771_itipopvn')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e772_ddestipopvn" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e772_ddestipopvn' ?>" >
				  
                                        <?php Lang::_lang('eku_e772_ddestipopvn', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e772_ddestipopvn" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e772_ddestipopvn')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e772_ddestipopvn' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e772_ddestipopvn' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE772Ddestipopvn(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e772_ddestipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e772_ddestipopvn', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e772_ddestipopvn', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e772_ddestipopvn', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e772_ddestipopvn')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e773_dchasis" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e773_dchasis' ?>" >
				  
                                        <?php Lang::_lang('eku_e773_dchasis', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e773_dchasis" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e773_dchasis')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e773_dchasis' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e773_dchasis' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE773Dchasis(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e773_dchasis', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e773_dchasis', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e773_dchasis', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e773_dchasis', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e773_dchasis')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e774_dcolor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e774_dcolor' ?>" >
				  
                                        <?php Lang::_lang('eku_e774_dcolor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e774_dcolor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e774_dcolor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e774_dcolor' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e774_dcolor' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE774Dcolor(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e774_dcolor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e774_dcolor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e774_dcolor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e774_dcolor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e774_dcolor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e775_dpotencia" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e775_dpotencia' ?>" >
				  
                                        <?php Lang::_lang('eku_e775_dpotencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e775_dpotencia" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e775_dpotencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e775_dpotencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e775_dpotencia' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE775Dpotencia(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e775_dpotencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e775_dpotencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e775_dpotencia', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e775_dpotencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e775_dpotencia')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e776_dcapmot" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e776_dcapmot' ?>" >
				  
                                        <?php Lang::_lang('eku_e776_dcapmot', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e776_dcapmot" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e776_dcapmot')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e776_dcapmot' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e776_dcapmot' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE776Dcapmot(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e776_dcapmot', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e776_dcapmot', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e776_dcapmot', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e776_dcapmot', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e776_dcapmot')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e777_dpnet" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e777_dpnet' ?>" >
				  
                                        <?php Lang::_lang('eku_e777_dpnet', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e777_dpnet" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e777_dpnet')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e777_dpnet' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e777_dpnet' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE777Dpnet(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e777_dpnet', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e777_dpnet', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e777_dpnet', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e777_dpnet', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e777_dpnet')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e778_dpbruto" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e778_dpbruto' ?>" >
				  
                                        <?php Lang::_lang('eku_e778_dpbruto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e778_dpbruto" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e778_dpbruto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e778_dpbruto' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e778_dpbruto' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE778Dpbruto(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e778_dpbruto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e778_dpbruto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e778_dpbruto', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e778_dpbruto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e778_dpbruto')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e779_itipcom" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e779_itipcom' ?>" >
				  
                                        <?php Lang::_lang('eku_e779_itipcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e779_itipcom" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e779_itipcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e779_itipcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e779_itipcom' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE779Itipcom(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e779_itipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e779_itipcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e779_itipcom', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e779_itipcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e779_itipcom')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e780_ddestipcom" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e780_ddestipcom' ?>" >
				  
                                        <?php Lang::_lang('eku_e780_ddestipcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e780_ddestipcom" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e780_ddestipcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e780_ddestipcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e780_ddestipcom' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE780Ddestipcom(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e780_ddestipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e780_ddestipcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e780_ddestipcom', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e780_ddestipcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e780_ddestipcom')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e781_dnromotor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e781_dnromotor' ?>" >
				  
                                        <?php Lang::_lang('eku_e781_dnromotor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e781_dnromotor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e781_dnromotor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e781_dnromotor' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e781_dnromotor' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE781Dnromotor(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e781_dnromotor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e781_dnromotor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e781_dnromotor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e781_dnromotor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e781_dnromotor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e782_dcaptracc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e782_dcaptracc' ?>" >
				  
                                        <?php Lang::_lang('eku_e782_dcaptracc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e782_dcaptracc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e782_dcaptracc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e782_dcaptracc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e782_dcaptracc' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE782Dcaptracc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e782_dcaptracc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e782_dcaptracc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e782_dcaptracc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e782_dcaptracc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e782_dcaptracc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e783_danofab" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e783_danofab' ?>" >
				  
                                        <?php Lang::_lang('eku_e783_danofab', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e783_danofab" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e783_danofab')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e783_danofab' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e783_danofab' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE783Danofab(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e783_danofab', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e783_danofab', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e783_danofab', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e783_danofab', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e783_danofab')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e784_ctipveh" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e784_ctipveh' ?>" >
				  
                                        <?php Lang::_lang('eku_e784_ctipveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e784_ctipveh" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e784_ctipveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e784_ctipveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e784_ctipveh' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE784Ctipveh(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e784_ctipveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e784_ctipveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e784_ctipveh', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e784_ctipveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e784_ctipveh')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e785_dcapac" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e785_dcapac' ?>" >
				  
                                        <?php Lang::_lang('eku_e785_dcapac', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e785_dcapac" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e785_dcapac')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e785_dcapac' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e785_dcapac' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE785Dcapac(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e785_dcapac', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e785_dcapac', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e785_dcapac', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e785_dcapac', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e785_dcapac')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e786_dcilin" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e786_dcilin' ?>" >
				  
                                        <?php Lang::_lang('eku_e786_dcilin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e786_dcilin" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e786_dcilin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e786_dcilin' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_eku_e786_dcilin' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE786Dcilin(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e786_dcilin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e786_dcilin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e786_dcilin', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_eku_e786_dcilin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e786_dcilin')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txa_observacion' rows='10' cols='50' id='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo'/>
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

