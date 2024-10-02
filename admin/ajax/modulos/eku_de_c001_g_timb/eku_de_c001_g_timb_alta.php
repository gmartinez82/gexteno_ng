<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_C001_G_TIMB_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_C001_G_TIMB_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_c001_g_timb';
$db_nombre_pagina = 'eku_de_c001_g_timb_alta';

$eku_de_c001_g_timb = new EkuDeC001GTimb();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_c001_g_timb = new EkuDeC001GTimb();
	if(trim($hdn_id) != '') $eku_de_c001_g_timb->setId($hdn_id, false);
	$eku_de_c001_g_timb->setDescripcion(Gral::getVars(1, "eku_de_c001_g_timb_txt_descripcion"));
	$eku_de_c001_g_timb->setEkuDeId(Gral::getVars(1, "eku_de_c001_g_timb_cmb_eku_de_id", null));
	$eku_de_c001_g_timb->setEkuC002Itide(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c002_itide"));
	$eku_de_c001_g_timb->setEkuC003Ddestide(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c003_ddestide"));
	$eku_de_c001_g_timb->setEkuC004Dnumtim(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c004_dnumtim"));
	$eku_de_c001_g_timb->setEkuC005Dest(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c005_dest"));
	$eku_de_c001_g_timb->setEkuC006Dpunexp(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c006_dpunexp"));
	$eku_de_c001_g_timb->setEkuC007Dnumdoc(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c007_dnumdoc"));
	$eku_de_c001_g_timb->setEkuC010Dserienum(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c010_dserienum"));
	$eku_de_c001_g_timb->setEkuC008Dfeinit(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c008_dfeinit"));
	$eku_de_c001_g_timb->setEkuC009Dfefint(Gral::getVars(1, "eku_de_c001_g_timb_txt_eku_c009_dfefint"));
	$eku_de_c001_g_timb->setCodigo(Gral::getVars(1, "eku_de_c001_g_timb_txt_codigo"));
	$eku_de_c001_g_timb->setObservacion(Gral::getVars(1, "eku_de_c001_g_timb_txa_observacion"));
	$eku_de_c001_g_timb->setOrden(Gral::getVars(1, "eku_de_c001_g_timb_txt_orden", 0));
	$eku_de_c001_g_timb->setEstado(Gral::getVars(1, "eku_de_c001_g_timb_cmb_estado", 0));
	$eku_de_c001_g_timb->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_c001_g_timb_txt_creado")));
	$eku_de_c001_g_timb->setCreadoPor(Gral::getVars(1, "eku_de_c001_g_timb__creado_por", 0));
	$eku_de_c001_g_timb->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_c001_g_timb_txt_modificado")));
	$eku_de_c001_g_timb->setModificadoPor(Gral::getVars(1, "eku_de_c001_g_timb__modificado_por", 0));

	$eku_de_c001_g_timb_estado = new EkuDeC001GTimb();
	if(trim($hdn_id) != ''){
		$eku_de_c001_g_timb_estado->setId($hdn_id);
		$eku_de_c001_g_timb->setEstado($eku_de_c001_g_timb_estado->getEstado());
				
	}else{
		$eku_de_c001_g_timb->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_c001_g_timb->control();
			if(!$error->getExisteError()){
				$eku_de_c001_g_timb->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_c001_g_timb_alta.php?cs=1&id='.$eku_de_c001_g_timb->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_c001_g_timb->control();
			if(!$error->getExisteError()){
				$eku_de_c001_g_timb->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_c001_g_timb_alta.php?cs=1');
				$eku_de_c001_g_timb = new EkuDeC001GTimb();
			}
		break;
	}
	Gral::setSes('EkuDeC001GTimb_ULTIMO_INSERTADO', $eku_de_c001_g_timb->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_c001_g_timb_id = Gral::getVars(2, $prefijo.'cmb_eku_de_c001_g_timb_id', 0);
	if($cmb_eku_de_c001_g_timb_id != 0){
		$eku_de_c001_g_timb = EkuDeC001GTimb::getOxId($cmb_eku_de_c001_g_timb_id);
	}else{
	
	$eku_de_c001_g_timb->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_c001_g_timb->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_c001_g_timb->setEkuC002Itide(Gral::getVars(2, "eku_c002_itide", ''));
	$eku_de_c001_g_timb->setEkuC003Ddestide(Gral::getVars(2, "eku_c003_ddestide", ''));
	$eku_de_c001_g_timb->setEkuC004Dnumtim(Gral::getVars(2, "eku_c004_dnumtim", ''));
	$eku_de_c001_g_timb->setEkuC005Dest(Gral::getVars(2, "eku_c005_dest", ''));
	$eku_de_c001_g_timb->setEkuC006Dpunexp(Gral::getVars(2, "eku_c006_dpunexp", ''));
	$eku_de_c001_g_timb->setEkuC007Dnumdoc(Gral::getVars(2, "eku_c007_dnumdoc", ''));
	$eku_de_c001_g_timb->setEkuC010Dserienum(Gral::getVars(2, "eku_c010_dserienum", ''));
	$eku_de_c001_g_timb->setEkuC008Dfeinit(Gral::getVars(2, "eku_c008_dfeinit", ''));
	$eku_de_c001_g_timb->setEkuC009Dfefint(Gral::getVars(2, "eku_c009_dfefint", ''));
	$eku_de_c001_g_timb->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_c001_g_timb->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_c001_g_timb->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_c001_g_timb->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_c001_g_timb->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_c001_g_timb->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_c001_g_timb->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_c001_g_timb->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_c001_g_timb->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_c001_g_timb/eku_de_c001_g_timb_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_c001_g_timb' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_c001_g_timb_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_c001_g_timb->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_C001_G_TIMB_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_c001_g_timb_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_c001_g_timb_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_c001_g_timb->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_c001_g_timb_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_c001_g_timb_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_c001_g_timb_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c002_itide" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c002_itide' ?>" >
				  
                                        <?php Lang::_lang('eku_c002_itide', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c002_itide" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c002_itide')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c002_itide' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c002_itide' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC002Itide(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c002_itide', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c002_itide', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c002_itide', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c002_itide', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c002_itide')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c003_ddestide" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c003_ddestide' ?>" >
				  
                                        <?php Lang::_lang('eku_c003_ddestide', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c003_ddestide" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c003_ddestide')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c003_ddestide' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c003_ddestide' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC003Ddestide(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c003_ddestide', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c003_ddestide', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c003_ddestide', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c003_ddestide', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c003_ddestide')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c004_dnumtim" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c004_dnumtim' ?>" >
				  
                                        <?php Lang::_lang('eku_c004_dnumtim', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c004_dnumtim" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c004_dnumtim')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c004_dnumtim' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c004_dnumtim' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC004Dnumtim(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c004_dnumtim', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c004_dnumtim', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c004_dnumtim', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c004_dnumtim', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c004_dnumtim')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c005_dest" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c005_dest' ?>" >
				  
                                        <?php Lang::_lang('eku_c005_dest', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c005_dest" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c005_dest')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c005_dest' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c005_dest' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC005Dest(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c005_dest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c005_dest', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c005_dest', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c005_dest', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c005_dest')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c006_dpunexp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c006_dpunexp' ?>" >
				  
                                        <?php Lang::_lang('eku_c006_dpunexp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c006_dpunexp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c006_dpunexp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c006_dpunexp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c006_dpunexp' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC006Dpunexp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c006_dpunexp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c006_dpunexp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c006_dpunexp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c006_dpunexp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c006_dpunexp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c007_dnumdoc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c007_dnumdoc' ?>" >
				  
                                        <?php Lang::_lang('eku_c007_dnumdoc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c007_dnumdoc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c007_dnumdoc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c007_dnumdoc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c007_dnumdoc' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC007Dnumdoc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c007_dnumdoc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c007_dnumdoc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c007_dnumdoc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c007_dnumdoc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c007_dnumdoc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c010_dserienum" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c010_dserienum' ?>" >
				  
                                        <?php Lang::_lang('eku_c010_dserienum', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c010_dserienum" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c010_dserienum')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c010_dserienum' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c010_dserienum' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC010Dserienum(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c010_dserienum', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c010_dserienum', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c010_dserienum', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c010_dserienum', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c010_dserienum')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c008_dfeinit" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c008_dfeinit' ?>" >
				  
                                        <?php Lang::_lang('eku_c008_dfeinit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c008_dfeinit" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c008_dfeinit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c008_dfeinit' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c008_dfeinit' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC008Dfeinit(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c008_dfeinit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c008_dfeinit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c008_dfeinit', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c008_dfeinit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c008_dfeinit')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_eku_c009_dfefint" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_c009_dfefint' ?>" >
				  
                                        <?php Lang::_lang('eku_c009_dfefint', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_eku_c009_dfefint" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_c009_dfefint')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_eku_c009_dfefint' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_eku_c009_dfefint' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getEkuC009Dfefint(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c009_dfefint', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_eku_c009_dfefint', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c009_dfefint', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_eku_c009_dfefint', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_c009_dfefint')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_c001_g_timb_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_c001_g_timb_txt_codigo' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_c001_g_timb_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_c001_g_timb_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_c001_g_timb_txa_observacion' rows='10' cols='50' id='eku_de_c001_g_timb_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_c001_g_timb->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_c001_g_timb_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_c001_g_timb_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_c001_g_timb_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_c001_g_timb_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_c001_g_timb->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_c001_g_timb_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_c001_g_timb'/>
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

