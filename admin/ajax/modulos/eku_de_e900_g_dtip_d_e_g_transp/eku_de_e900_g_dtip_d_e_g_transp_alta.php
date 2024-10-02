<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_e900_g_dtip_d_e_g_transp';
$db_nombre_pagina = 'eku_de_e900_g_dtip_d_e_g_transp_alta';

$eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
	if(trim($hdn_id) != '') $eku_de_e900_g_dtip_d_e_g_transp->setId($hdn_id, false);
	$eku_de_e900_g_dtip_d_e_g_transp->setDescripcion(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_descripcion"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuDeId(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id", null));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE901Itiptrans(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e901_itiptrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE902Ddestiptrans(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e902_ddestiptrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE903Imodtrans(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e903_imodtrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE904Ddesmodtrans(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e904_ddesmodtrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE905Irespflete(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e905_irespflete"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE906Ccondneg(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e906_ccondneg"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE907Dnumanif(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e907_dnumanif"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE908Dnudespimp(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e908_dnudespimp"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE909Dinitras(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e909_dinitras"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE910Dfintras(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e910_dfintras"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE911Cpaisdest(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e911_cpaisdest"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE912Ddespaisdest(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e912_ddespaisdest"));
	$eku_de_e900_g_dtip_d_e_g_transp->setCodigo(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_codigo"));
	$eku_de_e900_g_dtip_d_e_g_transp->setObservacion(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txa_observacion"));
	$eku_de_e900_g_dtip_d_e_g_transp->setOrden(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_orden", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setEstado(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_cmb_estado", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_creado")));
	$eku_de_e900_g_dtip_d_e_g_transp->setCreadoPor(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp__creado_por", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp_txt_modificado")));
	$eku_de_e900_g_dtip_d_e_g_transp->setModificadoPor(Gral::getVars(1, "eku_de_e900_g_dtip_d_e_g_transp__modificado_por", 0));

	$eku_de_e900_g_dtip_d_e_g_transp_estado = new EkuDeE900GDtipDEGTransp();
	if(trim($hdn_id) != ''){
		$eku_de_e900_g_dtip_d_e_g_transp_estado->setId($hdn_id);
		$eku_de_e900_g_dtip_d_e_g_transp->setEstado($eku_de_e900_g_dtip_d_e_g_transp_estado->getEstado());
				
	}else{
		$eku_de_e900_g_dtip_d_e_g_transp->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_e900_g_dtip_d_e_g_transp->control();
			if(!$error->getExisteError()){
				$eku_de_e900_g_dtip_d_e_g_transp->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_e900_g_dtip_d_e_g_transp_alta.php?cs=1&id='.$eku_de_e900_g_dtip_d_e_g_transp->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_e900_g_dtip_d_e_g_transp->control();
			if(!$error->getExisteError()){
				$eku_de_e900_g_dtip_d_e_g_transp->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_e900_g_dtip_d_e_g_transp_alta.php?cs=1');
				$eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
			}
		break;
	}
	Gral::setSes('EkuDeE900GDtipDEGTransp_ULTIMO_INSERTADO', $eku_de_e900_g_dtip_d_e_g_transp->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_e900_g_dtip_d_e_g_transp_id = Gral::getVars(2, $prefijo.'cmb_eku_de_e900_g_dtip_d_e_g_transp_id', 0);
	if($cmb_eku_de_e900_g_dtip_d_e_g_transp_id != 0){
		$eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($cmb_eku_de_e900_g_dtip_d_e_g_transp_id);
	}else{
	
	$eku_de_e900_g_dtip_d_e_g_transp->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE901Itiptrans(Gral::getVars(2, "eku_e901_itiptrans", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE902Ddestiptrans(Gral::getVars(2, "eku_e902_ddestiptrans", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE903Imodtrans(Gral::getVars(2, "eku_e903_imodtrans", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE904Ddesmodtrans(Gral::getVars(2, "eku_e904_ddesmodtrans", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE905Irespflete(Gral::getVars(2, "eku_e905_irespflete", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE906Ccondneg(Gral::getVars(2, "eku_e906_ccondneg", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE907Dnumanif(Gral::getVars(2, "eku_e907_dnumanif", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE908Dnudespimp(Gral::getVars(2, "eku_e908_dnudespimp", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE909Dinitras(Gral::getVars(2, "eku_e909_dinitras", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE910Dfintras(Gral::getVars(2, "eku_e910_dfintras", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE911Cpaisdest(Gral::getVars(2, "eku_e911_cpaisdest", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE912Ddespaisdest(Gral::getVars(2, "eku_e912_ddespaisdest", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_e900_g_dtip_d_e_g_transp->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_e900_g_dtip_d_e_g_transp->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_e900_g_dtip_d_e_g_transp->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_e900_g_dtip_d_e_g_transp->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_e900_g_dtip_d_e_g_transp->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_e900_g_dtip_d_e_g_transp' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_e900_g_dtip_d_e_g_transp->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e900_g_dtip_d_e_g_transp_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e900_g_dtip_d_e_g_transp->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_e900_g_dtip_d_e_g_transp_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_e900_g_dtip_d_e_g_transp_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e901_itiptrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e901_itiptrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e901_itiptrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e901_itiptrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e901_itiptrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e901_itiptrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e901_itiptrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE901Itiptrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e901_itiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e901_itiptrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e901_itiptrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e901_itiptrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e901_itiptrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e902_ddestiptrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e902_ddestiptrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e902_ddestiptrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e902_ddestiptrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e902_ddestiptrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e902_ddestiptrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e902_ddestiptrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE902Ddestiptrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e902_ddestiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e902_ddestiptrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e902_ddestiptrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e902_ddestiptrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e902_ddestiptrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e903_imodtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e903_imodtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e903_imodtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e903_imodtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e903_imodtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e903_imodtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e903_imodtrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE903Imodtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e903_imodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e903_imodtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e903_imodtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e903_imodtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e903_imodtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e904_ddesmodtrans" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans' ?>" >
				  
                                        <?php Lang::_lang('eku_e904_ddesmodtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e904_ddesmodtrans" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e904_ddesmodtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e904_ddesmodtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e904_ddesmodtrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE904Ddesmodtrans(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e904_ddesmodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e904_ddesmodtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e904_ddesmodtrans', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e904_ddesmodtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e904_ddesmodtrans')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e905_irespflete" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e905_irespflete' ?>" >
				  
                                        <?php Lang::_lang('eku_e905_irespflete', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e905_irespflete" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e905_irespflete')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e905_irespflete' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e905_irespflete' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE905Irespflete(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e905_irespflete', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e905_irespflete', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e905_irespflete', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e905_irespflete', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e905_irespflete')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e906_ccondneg" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e906_ccondneg' ?>" >
				  
                                        <?php Lang::_lang('eku_e906_ccondneg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e906_ccondneg" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e906_ccondneg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e906_ccondneg' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e906_ccondneg' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE906Ccondneg(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e906_ccondneg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e906_ccondneg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e906_ccondneg', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e906_ccondneg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e906_ccondneg')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e907_dnumanif" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e907_dnumanif' ?>" >
				  
                                        <?php Lang::_lang('eku_e907_dnumanif', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e907_dnumanif" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e907_dnumanif')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e907_dnumanif' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e907_dnumanif' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE907Dnumanif(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e907_dnumanif', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e907_dnumanif', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e907_dnumanif', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e907_dnumanif', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e907_dnumanif')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e908_dnudespimp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e908_dnudespimp' ?>" >
				  
                                        <?php Lang::_lang('eku_e908_dnudespimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e908_dnudespimp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e908_dnudespimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e908_dnudespimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e908_dnudespimp' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE908Dnudespimp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e908_dnudespimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e908_dnudespimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e908_dnudespimp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e908_dnudespimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e908_dnudespimp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e909_dinitras" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e909_dinitras' ?>" >
				  
                                        <?php Lang::_lang('eku_e909_dinitras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e909_dinitras" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e909_dinitras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e909_dinitras' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e909_dinitras' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE909Dinitras(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e909_dinitras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e909_dinitras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e909_dinitras', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e909_dinitras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e909_dinitras')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e910_dfintras" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e910_dfintras' ?>" >
				  
                                        <?php Lang::_lang('eku_e910_dfintras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e910_dfintras" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e910_dfintras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e910_dfintras' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e910_dfintras' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE910Dfintras(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e910_dfintras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e910_dfintras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e910_dfintras', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e910_dfintras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e910_dfintras')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e911_cpaisdest" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e911_cpaisdest' ?>" >
				  
                                        <?php Lang::_lang('eku_e911_cpaisdest', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e911_cpaisdest" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e911_cpaisdest')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e911_cpaisdest' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e911_cpaisdest' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE911Cpaisdest(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e911_cpaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e911_cpaisdest', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e911_cpaisdest', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e911_cpaisdest', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e911_cpaisdest')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e912_ddespaisdest" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e912_ddespaisdest' ?>" >
				  
                                        <?php Lang::_lang('eku_e912_ddespaisdest', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e912_ddespaisdest" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_e912_ddespaisdest')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e912_ddespaisdest' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_eku_e912_ddespaisdest' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE912Ddespaisdest(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e912_ddespaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e912_ddespaisdest', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e912_ddespaisdest', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_eku_e912_ddespaisdest', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e912_ddespaisdest')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_e900_g_dtip_d_e_g_transp_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_e900_g_dtip_d_e_g_transp_txt_codigo' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_e900_g_dtip_d_e_g_transp_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_e900_g_dtip_d_e_g_transp_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_e900_g_dtip_d_e_g_transp_txa_observacion' rows='10' cols='50' id='eku_de_e900_g_dtip_d_e_g_transp_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_e900_g_dtip_d_e_g_transp_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_e900_g_dtip_d_e_g_transp_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_e900_g_dtip_d_e_g_transp_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_e900_g_dtip_d_e_g_transp'/>
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

