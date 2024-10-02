<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_g050_g_cam_gen_g_cam_carg';
$db_nombre_pagina = 'eku_de_g050_g_cam_gen_g_cam_carg_alta';

$eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
	if(trim($hdn_id) != '') $eku_de_g050_g_cam_gen_g_cam_carg->setId($hdn_id, false);
	$eku_de_g050_g_cam_gen_g_cam_carg->setDescripcion(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_descripcion"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuDeId(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id", null));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG051Cunimedtotvol(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g051_cunimedtotvol"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG052Ddesunimedtotvol(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g052_ddesunimedtotvol"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG053Dtotvolmerc(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g053_dtotvolmerc"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG054Cunimedtotpes(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g054_cunimedtotpes"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG055Ddesunimedtotpes(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g055_ddesunimedtotpes"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG056Dtotpesmerc(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g056_dtotpesmerc"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG057Icarcarga(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g057_icarcarga"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG058Ddescarcarga(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g058_ddescarcarga"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCodigo(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_codigo"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setObservacion(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txa_observacion"));
	$eku_de_g050_g_cam_gen_g_cam_carg->setOrden(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_orden", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEstado(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_cmb_estado", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_creado")));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCreadoPor(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg__creado_por", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg_txt_modificado")));
	$eku_de_g050_g_cam_gen_g_cam_carg->setModificadoPor(Gral::getVars(1, "eku_de_g050_g_cam_gen_g_cam_carg__modificado_por", 0));

	$eku_de_g050_g_cam_gen_g_cam_carg_estado = new EkuDeG050GCamGenGCamCarg();
	if(trim($hdn_id) != ''){
		$eku_de_g050_g_cam_gen_g_cam_carg_estado->setId($hdn_id);
		$eku_de_g050_g_cam_gen_g_cam_carg->setEstado($eku_de_g050_g_cam_gen_g_cam_carg_estado->getEstado());
				
	}else{
		$eku_de_g050_g_cam_gen_g_cam_carg->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_g050_g_cam_gen_g_cam_carg->control();
			if(!$error->getExisteError()){
				$eku_de_g050_g_cam_gen_g_cam_carg->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_g050_g_cam_gen_g_cam_carg_alta.php?cs=1&id='.$eku_de_g050_g_cam_gen_g_cam_carg->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_g050_g_cam_gen_g_cam_carg->control();
			if(!$error->getExisteError()){
				$eku_de_g050_g_cam_gen_g_cam_carg->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_g050_g_cam_gen_g_cam_carg_alta.php?cs=1');
				$eku_de_g050_g_cam_gen_g_cam_carg = new EkuDeG050GCamGenGCamCarg();
			}
		break;
	}
	Gral::setSes('EkuDeG050GCamGenGCamCarg_ULTIMO_INSERTADO', $eku_de_g050_g_cam_gen_g_cam_carg->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_g050_g_cam_gen_g_cam_carg_id = Gral::getVars(2, $prefijo.'cmb_eku_de_g050_g_cam_gen_g_cam_carg_id', 0);
	if($cmb_eku_de_g050_g_cam_gen_g_cam_carg_id != 0){
		$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($cmb_eku_de_g050_g_cam_gen_g_cam_carg_id);
	}else{
	
	$eku_de_g050_g_cam_gen_g_cam_carg->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG051Cunimedtotvol(Gral::getVars(2, "eku_g051_cunimedtotvol", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG052Ddesunimedtotvol(Gral::getVars(2, "eku_g052_ddesunimedtotvol", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG053Dtotvolmerc(Gral::getVars(2, "eku_g053_dtotvolmerc", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG054Cunimedtotpes(Gral::getVars(2, "eku_g054_cunimedtotpes", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG055Ddesunimedtotpes(Gral::getVars(2, "eku_g055_ddesunimedtotpes", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG056Dtotpesmerc(Gral::getVars(2, "eku_g056_dtotpesmerc", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG057Icarcarga(Gral::getVars(2, "eku_g057_icarcarga", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEkuG058Ddescarcarga(Gral::getVars(2, "eku_g058_ddescarcarga", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_g050_g_cam_gen_g_cam_carg->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_g050_g_cam_gen_g_cam_carg->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_g050_g_cam_gen_g_cam_carg->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_g050_g_cam_gen_g_cam_carg->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_g050_g_cam_gen_g_cam_carg->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_g050_g_cam_gen_g_cam_carg' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_g050_g_cam_gen_g_cam_carg->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_g050_g_cam_gen_g_cam_carg_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_g050_g_cam_gen_g_cam_carg_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_g050_g_cam_gen_g_cam_carg_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g051_cunimedtotvol" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g051_cunimedtotvol' ?>" >
				  
                                        <?php Lang::_lang('eku_g051_cunimedtotvol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g051_cunimedtotvol" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g051_cunimedtotvol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g051_cunimedtotvol' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g051_cunimedtotvol' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g051_cunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g051_cunimedtotvol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g051_cunimedtotvol', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g051_cunimedtotvol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g051_cunimedtotvol')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g052_ddesunimedtotvol" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g052_ddesunimedtotvol' ?>" >
				  
                                        <?php Lang::_lang('eku_g052_ddesunimedtotvol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g052_ddesunimedtotvol" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g052_ddesunimedtotvol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g052_ddesunimedtotvol' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g052_ddesunimedtotvol' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g052_ddesunimedtotvol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g052_ddesunimedtotvol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g052_ddesunimedtotvol', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g052_ddesunimedtotvol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g052_ddesunimedtotvol')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g053_dtotvolmerc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g053_dtotvolmerc' ?>" >
				  
                                        <?php Lang::_lang('eku_g053_dtotvolmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g053_dtotvolmerc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g053_dtotvolmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g053_dtotvolmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g053_dtotvolmerc' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g053_dtotvolmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g053_dtotvolmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g053_dtotvolmerc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g053_dtotvolmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g053_dtotvolmerc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g054_cunimedtotpes" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g054_cunimedtotpes' ?>" >
				  
                                        <?php Lang::_lang('eku_g054_cunimedtotpes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g054_cunimedtotpes" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g054_cunimedtotpes')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g054_cunimedtotpes' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g054_cunimedtotpes' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g054_cunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g054_cunimedtotpes', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g054_cunimedtotpes', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g054_cunimedtotpes', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g054_cunimedtotpes')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g055_ddesunimedtotpes" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g055_ddesunimedtotpes' ?>" >
				  
                                        <?php Lang::_lang('eku_g055_ddesunimedtotpes', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g055_ddesunimedtotpes" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g055_ddesunimedtotpes')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g055_ddesunimedtotpes' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g055_ddesunimedtotpes' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g055_ddesunimedtotpes', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g055_ddesunimedtotpes', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g055_ddesunimedtotpes', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g055_ddesunimedtotpes', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g055_ddesunimedtotpes')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g056_dtotpesmerc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g056_dtotpesmerc' ?>" >
				  
                                        <?php Lang::_lang('eku_g056_dtotpesmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g056_dtotpesmerc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g056_dtotpesmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g056_dtotpesmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g056_dtotpesmerc' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g056_dtotpesmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g056_dtotpesmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g056_dtotpesmerc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g056_dtotpesmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g056_dtotpesmerc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g057_icarcarga" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g057_icarcarga' ?>" >
				  
                                        <?php Lang::_lang('eku_g057_icarcarga', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g057_icarcarga" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g057_icarcarga')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g057_icarcarga' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g057_icarcarga' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g057_icarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g057_icarcarga', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g057_icarcarga', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g057_icarcarga', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g057_icarcarga')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g058_ddescarcarga" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_g058_ddescarcarga' ?>" >
				  
                                        <?php Lang::_lang('eku_g058_ddescarcarga', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g058_ddescarcarga" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_g058_ddescarcarga')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g058_ddescarcarga' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_eku_g058_ddescarcarga' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g058_ddescarcarga', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g058_ddescarcarga', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g058_ddescarcarga', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_eku_g058_ddescarcarga', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_g058_ddescarcarga')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_g050_g_cam_gen_g_cam_carg_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_g050_g_cam_gen_g_cam_carg_txt_codigo' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_g050_g_cam_gen_g_cam_carg_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_g050_g_cam_gen_g_cam_carg_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_g050_g_cam_gen_g_cam_carg_txa_observacion' rows='10' cols='50' id='eku_de_g050_g_cam_gen_g_cam_carg_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_g050_g_cam_gen_g_cam_carg_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_g050_g_cam_gen_g_cam_carg_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_g050_g_cam_gen_g_cam_carg->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_g050_g_cam_gen_g_cam_carg_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_g050_g_cam_gen_g_cam_carg'/>
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

