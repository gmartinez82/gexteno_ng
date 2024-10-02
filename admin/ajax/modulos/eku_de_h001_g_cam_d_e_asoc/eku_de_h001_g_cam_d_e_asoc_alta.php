<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_H001_G_CAM_D_E_ASOC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_h001_g_cam_d_e_asoc';
$db_nombre_pagina = 'eku_de_h001_g_cam_d_e_asoc_alta';

$eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
	if(trim($hdn_id) != '') $eku_de_h001_g_cam_d_e_asoc->setId($hdn_id, false);
	$eku_de_h001_g_cam_d_e_asoc->setDescripcion(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_descripcion"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuDeId(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id", null));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH002Itipdocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h002_itipdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH003Ddestipdocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h003_ddestipdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH004Dcdcderef(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h004_dcdcderef"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH005Dntimdi(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h005_dntimdi"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH006Destdocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h006_destdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH007Dpexpdocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h007_dpexpdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH008Dnumdocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h008_dnumdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH009Itipodocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h009_itipodocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH010Ddtipodocaso(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h010_ddtipodocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH011Dfecemidi(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h011_dfecemidi"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH012Dnumcomret(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h012_dnumcomret"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH013Dnumrescf(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h013_dnumrescf"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH014Itipcons(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h014_itipcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH015Ddestipcons(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h015_ddestipcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH016Dnumcons(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h016_dnumcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH017Dnumcontrol(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_eku_h017_dnumcontrol"));
	$eku_de_h001_g_cam_d_e_asoc->setCodigo(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_codigo"));
	$eku_de_h001_g_cam_d_e_asoc->setObservacion(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txa_observacion"));
	$eku_de_h001_g_cam_d_e_asoc->setOrden(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_orden", 0));
	$eku_de_h001_g_cam_d_e_asoc->setEstado(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_cmb_estado", 0));
	$eku_de_h001_g_cam_d_e_asoc->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_creado")));
	$eku_de_h001_g_cam_d_e_asoc->setCreadoPor(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc__creado_por", 0));
	$eku_de_h001_g_cam_d_e_asoc->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc_txt_modificado")));
	$eku_de_h001_g_cam_d_e_asoc->setModificadoPor(Gral::getVars(1, "eku_de_h001_g_cam_d_e_asoc__modificado_por", 0));

	$eku_de_h001_g_cam_d_e_asoc_estado = new EkuDeH001GCamDEAsoc();
	if(trim($hdn_id) != ''){
		$eku_de_h001_g_cam_d_e_asoc_estado->setId($hdn_id);
		$eku_de_h001_g_cam_d_e_asoc->setEstado($eku_de_h001_g_cam_d_e_asoc_estado->getEstado());
				
	}else{
		$eku_de_h001_g_cam_d_e_asoc->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_h001_g_cam_d_e_asoc->control();
			if(!$error->getExisteError()){
				$eku_de_h001_g_cam_d_e_asoc->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_h001_g_cam_d_e_asoc_alta.php?cs=1&id='.$eku_de_h001_g_cam_d_e_asoc->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_h001_g_cam_d_e_asoc->control();
			if(!$error->getExisteError()){
				$eku_de_h001_g_cam_d_e_asoc->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_h001_g_cam_d_e_asoc_alta.php?cs=1');
				$eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
			}
		break;
	}
	Gral::setSes('EkuDeH001GCamDEAsoc_ULTIMO_INSERTADO', $eku_de_h001_g_cam_d_e_asoc->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_h001_g_cam_d_e_asoc_id = Gral::getVars(2, $prefijo.'cmb_eku_de_h001_g_cam_d_e_asoc_id', 0);
	if($cmb_eku_de_h001_g_cam_d_e_asoc_id != 0){
		$eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($cmb_eku_de_h001_g_cam_d_e_asoc_id);
	}else{
	
	$eku_de_h001_g_cam_d_e_asoc->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH002Itipdocaso(Gral::getVars(2, "eku_h002_itipdocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH003Ddestipdocaso(Gral::getVars(2, "eku_h003_ddestipdocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH004Dcdcderef(Gral::getVars(2, "eku_h004_dcdcderef", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH005Dntimdi(Gral::getVars(2, "eku_h005_dntimdi", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH006Destdocaso(Gral::getVars(2, "eku_h006_destdocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH007Dpexpdocaso(Gral::getVars(2, "eku_h007_dpexpdocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH008Dnumdocaso(Gral::getVars(2, "eku_h008_dnumdocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH009Itipodocaso(Gral::getVars(2, "eku_h009_itipodocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH010Ddtipodocaso(Gral::getVars(2, "eku_h010_ddtipodocaso", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH011Dfecemidi(Gral::getVars(2, "eku_h011_dfecemidi", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH012Dnumcomret(Gral::getVars(2, "eku_h012_dnumcomret", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH013Dnumrescf(Gral::getVars(2, "eku_h013_dnumrescf", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH014Itipcons(Gral::getVars(2, "eku_h014_itipcons", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH015Ddestipcons(Gral::getVars(2, "eku_h015_ddestipcons", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH016Dnumcons(Gral::getVars(2, "eku_h016_dnumcons", ''));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH017Dnumcontrol(Gral::getVars(2, "eku_h017_dnumcontrol", ''));
	$eku_de_h001_g_cam_d_e_asoc->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_h001_g_cam_d_e_asoc->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_h001_g_cam_d_e_asoc->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_h001_g_cam_d_e_asoc->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_h001_g_cam_d_e_asoc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_h001_g_cam_d_e_asoc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_h001_g_cam_d_e_asoc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_h001_g_cam_d_e_asoc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_h001_g_cam_d_e_asoc->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_h001_g_cam_d_e_asoc' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_h001_g_cam_d_e_asoc->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_h001_g_cam_d_e_asoc_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_h001_g_cam_d_e_asoc->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_h001_g_cam_d_e_asoc_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_h001_g_cam_d_e_asoc_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h002_itipdocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h002_itipdocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h002_itipdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h002_itipdocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h002_itipdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h002_itipdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h002_itipdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h002_itipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h002_itipdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h002_itipdocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h002_itipdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h002_itipdocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h003_ddestipdocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h003_ddestipdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h003_ddestipdocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h003_ddestipdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h003_ddestipdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h003_ddestipdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h003_ddestipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h003_ddestipdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h003_ddestipdocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h003_ddestipdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h003_ddestipdocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h004_dcdcderef" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h004_dcdcderef' ?>" >
				  
                                        <?php Lang::_lang('eku_h004_dcdcderef', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h004_dcdcderef" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h004_dcdcderef')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h004_dcdcderef' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h004_dcdcderef' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h004_dcdcderef', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h004_dcdcderef', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h004_dcdcderef', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h004_dcdcderef', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h004_dcdcderef')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h005_dntimdi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h005_dntimdi' ?>" >
				  
                                        <?php Lang::_lang('eku_h005_dntimdi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h005_dntimdi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h005_dntimdi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h005_dntimdi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h005_dntimdi' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h005_dntimdi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h005_dntimdi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h005_dntimdi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h005_dntimdi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h005_dntimdi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h006_destdocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h006_destdocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h006_destdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h006_destdocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h006_destdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h006_destdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h006_destdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h006_destdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h006_destdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h006_destdocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h006_destdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h006_destdocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h007_dpexpdocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h007_dpexpdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h007_dpexpdocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h007_dpexpdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h007_dpexpdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h007_dpexpdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h007_dpexpdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h007_dpexpdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h007_dpexpdocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h007_dpexpdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h007_dpexpdocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h008_dnumdocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h008_dnumdocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h008_dnumdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h008_dnumdocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h008_dnumdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h008_dnumdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h008_dnumdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h008_dnumdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h008_dnumdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h008_dnumdocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h008_dnumdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h008_dnumdocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h009_itipodocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h009_itipodocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h009_itipodocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h009_itipodocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h009_itipodocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h009_itipodocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h009_itipodocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h009_itipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h009_itipodocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h009_itipodocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h009_itipodocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h009_itipodocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h010_ddtipodocaso" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso' ?>" >
				  
                                        <?php Lang::_lang('eku_h010_ddtipodocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h010_ddtipodocaso" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h010_ddtipodocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h010_ddtipodocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h010_ddtipodocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h010_ddtipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h010_ddtipodocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h010_ddtipodocaso', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h010_ddtipodocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h010_ddtipodocaso')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h011_dfecemidi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h011_dfecemidi' ?>" >
				  
                                        <?php Lang::_lang('eku_h011_dfecemidi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h011_dfecemidi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h011_dfecemidi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h011_dfecemidi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h011_dfecemidi' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h011_dfecemidi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h011_dfecemidi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h011_dfecemidi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h011_dfecemidi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h011_dfecemidi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h012_dnumcomret" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h012_dnumcomret' ?>" >
				  
                                        <?php Lang::_lang('eku_h012_dnumcomret', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h012_dnumcomret" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h012_dnumcomret')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h012_dnumcomret' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h012_dnumcomret' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h012_dnumcomret', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h012_dnumcomret', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h012_dnumcomret', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h012_dnumcomret', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h012_dnumcomret')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h013_dnumrescf" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h013_dnumrescf' ?>" >
				  
                                        <?php Lang::_lang('eku_h013_dnumrescf', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h013_dnumrescf" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h013_dnumrescf')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h013_dnumrescf' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h013_dnumrescf' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h013_dnumrescf', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h013_dnumrescf', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h013_dnumrescf', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h013_dnumrescf', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h013_dnumrescf')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h014_itipcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h014_itipcons' ?>" >
				  
                                        <?php Lang::_lang('eku_h014_itipcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h014_itipcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h014_itipcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h014_itipcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h014_itipcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h014_itipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h014_itipcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h014_itipcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h014_itipcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h014_itipcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h015_ddestipcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h015_ddestipcons' ?>" >
				  
                                        <?php Lang::_lang('eku_h015_ddestipcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h015_ddestipcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h015_ddestipcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h015_ddestipcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h015_ddestipcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h015_ddestipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h015_ddestipcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h015_ddestipcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h015_ddestipcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h015_ddestipcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h016_dnumcons" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h016_dnumcons' ?>" >
				  
                                        <?php Lang::_lang('eku_h016_dnumcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h016_dnumcons" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h016_dnumcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h016_dnumcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h016_dnumcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h016_dnumcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h016_dnumcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h016_dnumcons', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h016_dnumcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h016_dnumcons')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_eku_h017_dnumcontrol" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h017_dnumcontrol' ?>" >
				  
                                        <?php Lang::_lang('eku_h017_dnumcontrol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_eku_h017_dnumcontrol" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_h017_dnumcontrol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_eku_h017_dnumcontrol' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_eku_h017_dnumcontrol' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h017_dnumcontrol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_eku_h017_dnumcontrol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h017_dnumcontrol', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_eku_h017_dnumcontrol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h017_dnumcontrol')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_h001_g_cam_d_e_asoc_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_h001_g_cam_d_e_asoc_txt_codigo' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_h001_g_cam_d_e_asoc_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_h001_g_cam_d_e_asoc_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_h001_g_cam_d_e_asoc_txa_observacion' rows='10' cols='50' id='eku_de_h001_g_cam_d_e_asoc_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_h001_g_cam_d_e_asoc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_h001_g_cam_d_e_asoc_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_h001_g_cam_d_e_asoc_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_h001_g_cam_d_e_asoc'/>
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

