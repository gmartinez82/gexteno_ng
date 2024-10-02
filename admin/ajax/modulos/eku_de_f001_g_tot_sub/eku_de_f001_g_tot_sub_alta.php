<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_F001_G_TOT_SUB_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_f001_g_tot_sub';
$db_nombre_pagina = 'eku_de_f001_g_tot_sub_alta';

$eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
	if(trim($hdn_id) != '') $eku_de_f001_g_tot_sub->setId($hdn_id, false);
	$eku_de_f001_g_tot_sub->setDescripcion(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_descripcion"));
	$eku_de_f001_g_tot_sub->setEkuDeId(Gral::getVars(1, "eku_de_f001_g_tot_sub_cmb_eku_de_id", null));
	$eku_de_f001_g_tot_sub->setEkuF002Dsubexe(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f002_dsubexe"));
	$eku_de_f001_g_tot_sub->setEkuF003Dsubexo(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f003_dsubexo"));
	$eku_de_f001_g_tot_sub->setEkuF004Dsub5(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f004_dsub5"));
	$eku_de_f001_g_tot_sub->setEkuF005Dsub10(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f005_dsub10"));
	$eku_de_f001_g_tot_sub->setEkuF008Dtotope(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f008_dtotope"));
	$eku_de_f001_g_tot_sub->setEkuF009Dtotdesc(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f009_dtotdesc"));
	$eku_de_f001_g_tot_sub->setEkuF033Dtotdescglotem(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f033_dtotdescglotem"));
	$eku_de_f001_g_tot_sub->setEkuF034Dtotantitem(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f034_dtotantitem"));
	$eku_de_f001_g_tot_sub->setEkuF035Dtotant(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f035_dtotant"));
	$eku_de_f001_g_tot_sub->setEkuF010Dporcdesctotal(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f010_dporcdesctotal"));
	$eku_de_f001_g_tot_sub->setEkuF011Ddesctotal(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f011_ddesctotal"));
	$eku_de_f001_g_tot_sub->setEkuF012Danticipo(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f012_danticipo"));
	$eku_de_f001_g_tot_sub->setEkuF013Dredon(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f013_dredon"));
	$eku_de_f001_g_tot_sub->setEkuF025Dcomi(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f025_dcomi"));
	$eku_de_f001_g_tot_sub->setEkuF014Dtotgralope(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f014_dtotgralope"));
	$eku_de_f001_g_tot_sub->setEkuF015Diva5(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f015_diva5"));
	$eku_de_f001_g_tot_sub->setEkuF016Diva10(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f016_diva10"));
	$eku_de_f001_g_tot_sub->setEkuF036Dliqtotiva5(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f036_dliqtotiva5"));
	$eku_de_f001_g_tot_sub->setEkuF037Dliqtotiva10(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f037_dliqtotiva10"));
	$eku_de_f001_g_tot_sub->setEkuF026Divacomi(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f026_divacomi"));
	$eku_de_f001_g_tot_sub->setEkuF017Dtotiva(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f017_dtotiva"));
	$eku_de_f001_g_tot_sub->setEkuF018Dbasegrav5(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f018_dbasegrav5"));
	$eku_de_f001_g_tot_sub->setEkuF019Dbasegrav10(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f019_dbasegrav10"));
	$eku_de_f001_g_tot_sub->setEkuF020Dtbasgraiva(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f020_dtbasgraiva"));
	$eku_de_f001_g_tot_sub->setEkuF023Dtotalgs(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f023_dtotalgs"));
	$eku_de_f001_g_tot_sub->setEkuF024Dtotcom(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_eku_f024_dtotcom"));
	$eku_de_f001_g_tot_sub->setCodigo(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_codigo"));
	$eku_de_f001_g_tot_sub->setObservacion(Gral::getVars(1, "eku_de_f001_g_tot_sub_txa_observacion"));
	$eku_de_f001_g_tot_sub->setOrden(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_orden", 0));
	$eku_de_f001_g_tot_sub->setEstado(Gral::getVars(1, "eku_de_f001_g_tot_sub_cmb_estado", 0));
	$eku_de_f001_g_tot_sub->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_creado")));
	$eku_de_f001_g_tot_sub->setCreadoPor(Gral::getVars(1, "eku_de_f001_g_tot_sub__creado_por", 0));
	$eku_de_f001_g_tot_sub->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_f001_g_tot_sub_txt_modificado")));
	$eku_de_f001_g_tot_sub->setModificadoPor(Gral::getVars(1, "eku_de_f001_g_tot_sub__modificado_por", 0));

	$eku_de_f001_g_tot_sub_estado = new EkuDeF001GTotSub();
	if(trim($hdn_id) != ''){
		$eku_de_f001_g_tot_sub_estado->setId($hdn_id);
		$eku_de_f001_g_tot_sub->setEstado($eku_de_f001_g_tot_sub_estado->getEstado());
				
	}else{
		$eku_de_f001_g_tot_sub->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_f001_g_tot_sub->control();
			if(!$error->getExisteError()){
				$eku_de_f001_g_tot_sub->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_f001_g_tot_sub_alta.php?cs=1&id='.$eku_de_f001_g_tot_sub->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_f001_g_tot_sub->control();
			if(!$error->getExisteError()){
				$eku_de_f001_g_tot_sub->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_f001_g_tot_sub_alta.php?cs=1');
				$eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
			}
		break;
	}
	Gral::setSes('EkuDeF001GTotSub_ULTIMO_INSERTADO', $eku_de_f001_g_tot_sub->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_f001_g_tot_sub_id = Gral::getVars(2, $prefijo.'cmb_eku_de_f001_g_tot_sub_id', 0);
	if($cmb_eku_de_f001_g_tot_sub_id != 0){
		$eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($cmb_eku_de_f001_g_tot_sub_id);
	}else{
	
	$eku_de_f001_g_tot_sub->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_f001_g_tot_sub->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_f001_g_tot_sub->setEkuF002Dsubexe(Gral::getVars(2, "eku_f002_dsubexe", ''));
	$eku_de_f001_g_tot_sub->setEkuF003Dsubexo(Gral::getVars(2, "eku_f003_dsubexo", ''));
	$eku_de_f001_g_tot_sub->setEkuF004Dsub5(Gral::getVars(2, "eku_f004_dsub5", ''));
	$eku_de_f001_g_tot_sub->setEkuF005Dsub10(Gral::getVars(2, "eku_f005_dsub10", ''));
	$eku_de_f001_g_tot_sub->setEkuF008Dtotope(Gral::getVars(2, "eku_f008_dtotope", ''));
	$eku_de_f001_g_tot_sub->setEkuF009Dtotdesc(Gral::getVars(2, "eku_f009_dtotdesc", ''));
	$eku_de_f001_g_tot_sub->setEkuF033Dtotdescglotem(Gral::getVars(2, "eku_f033_dtotdescglotem", ''));
	$eku_de_f001_g_tot_sub->setEkuF034Dtotantitem(Gral::getVars(2, "eku_f034_dtotantitem", ''));
	$eku_de_f001_g_tot_sub->setEkuF035Dtotant(Gral::getVars(2, "eku_f035_dtotant", ''));
	$eku_de_f001_g_tot_sub->setEkuF010Dporcdesctotal(Gral::getVars(2, "eku_f010_dporcdesctotal", ''));
	$eku_de_f001_g_tot_sub->setEkuF011Ddesctotal(Gral::getVars(2, "eku_f011_ddesctotal", ''));
	$eku_de_f001_g_tot_sub->setEkuF012Danticipo(Gral::getVars(2, "eku_f012_danticipo", ''));
	$eku_de_f001_g_tot_sub->setEkuF013Dredon(Gral::getVars(2, "eku_f013_dredon", ''));
	$eku_de_f001_g_tot_sub->setEkuF025Dcomi(Gral::getVars(2, "eku_f025_dcomi", ''));
	$eku_de_f001_g_tot_sub->setEkuF014Dtotgralope(Gral::getVars(2, "eku_f014_dtotgralope", ''));
	$eku_de_f001_g_tot_sub->setEkuF015Diva5(Gral::getVars(2, "eku_f015_diva5", ''));
	$eku_de_f001_g_tot_sub->setEkuF016Diva10(Gral::getVars(2, "eku_f016_diva10", ''));
	$eku_de_f001_g_tot_sub->setEkuF036Dliqtotiva5(Gral::getVars(2, "eku_f036_dliqtotiva5", ''));
	$eku_de_f001_g_tot_sub->setEkuF037Dliqtotiva10(Gral::getVars(2, "eku_f037_dliqtotiva10", ''));
	$eku_de_f001_g_tot_sub->setEkuF026Divacomi(Gral::getVars(2, "eku_f026_divacomi", ''));
	$eku_de_f001_g_tot_sub->setEkuF017Dtotiva(Gral::getVars(2, "eku_f017_dtotiva", ''));
	$eku_de_f001_g_tot_sub->setEkuF018Dbasegrav5(Gral::getVars(2, "eku_f018_dbasegrav5", ''));
	$eku_de_f001_g_tot_sub->setEkuF019Dbasegrav10(Gral::getVars(2, "eku_f019_dbasegrav10", ''));
	$eku_de_f001_g_tot_sub->setEkuF020Dtbasgraiva(Gral::getVars(2, "eku_f020_dtbasgraiva", ''));
	$eku_de_f001_g_tot_sub->setEkuF023Dtotalgs(Gral::getVars(2, "eku_f023_dtotalgs", ''));
	$eku_de_f001_g_tot_sub->setEkuF024Dtotcom(Gral::getVars(2, "eku_f024_dtotcom", ''));
	$eku_de_f001_g_tot_sub->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_f001_g_tot_sub->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_f001_g_tot_sub->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_f001_g_tot_sub->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_f001_g_tot_sub->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_f001_g_tot_sub->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_f001_g_tot_sub->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_f001_g_tot_sub->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_f001_g_tot_sub->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_f001_g_tot_sub' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_f001_g_tot_sub_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_f001_g_tot_sub->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_f001_g_tot_sub_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_f001_g_tot_sub_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_f001_g_tot_sub->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_f001_g_tot_sub_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_f001_g_tot_sub_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_f001_g_tot_sub_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f002_dsubexe" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f002_dsubexe' ?>" >
				  
                                        <?php Lang::_lang('eku_f002_dsubexe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f002_dsubexe" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f002_dsubexe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f002_dsubexe' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f002_dsubexe' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF002Dsubexe(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f002_dsubexe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f002_dsubexe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f002_dsubexe', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f002_dsubexe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f002_dsubexe')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f003_dsubexo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f003_dsubexo' ?>" >
				  
                                        <?php Lang::_lang('eku_f003_dsubexo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f003_dsubexo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f003_dsubexo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f003_dsubexo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f003_dsubexo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF003Dsubexo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f003_dsubexo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f003_dsubexo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f003_dsubexo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f003_dsubexo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f003_dsubexo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f004_dsub5" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f004_dsub5' ?>" >
				  
                                        <?php Lang::_lang('eku_f004_dsub5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f004_dsub5" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f004_dsub5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f004_dsub5' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f004_dsub5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF004Dsub5(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f004_dsub5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f004_dsub5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f004_dsub5', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f004_dsub5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f004_dsub5')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f005_dsub10" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f005_dsub10' ?>" >
				  
                                        <?php Lang::_lang('eku_f005_dsub10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f005_dsub10" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f005_dsub10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f005_dsub10' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f005_dsub10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF005Dsub10(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f005_dsub10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f005_dsub10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f005_dsub10', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f005_dsub10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f005_dsub10')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f008_dtotope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f008_dtotope' ?>" >
				  
                                        <?php Lang::_lang('eku_f008_dtotope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f008_dtotope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f008_dtotope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f008_dtotope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f008_dtotope' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF008Dtotope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f008_dtotope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f008_dtotope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f008_dtotope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f008_dtotope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f008_dtotope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f009_dtotdesc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f009_dtotdesc' ?>" >
				  
                                        <?php Lang::_lang('eku_f009_dtotdesc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f009_dtotdesc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f009_dtotdesc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f009_dtotdesc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f009_dtotdesc' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF009Dtotdesc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f009_dtotdesc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f009_dtotdesc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f009_dtotdesc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f009_dtotdesc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f009_dtotdesc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f033_dtotdescglotem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem' ?>" >
				  
                                        <?php Lang::_lang('eku_f033_dtotdescglotem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f033_dtotdescglotem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f033_dtotdescglotem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f033_dtotdescglotem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f033_dtotdescglotem' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF033Dtotdescglotem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f033_dtotdescglotem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f033_dtotdescglotem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f033_dtotdescglotem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f033_dtotdescglotem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f033_dtotdescglotem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f034_dtotantitem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f034_dtotantitem' ?>" >
				  
                                        <?php Lang::_lang('eku_f034_dtotantitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f034_dtotantitem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f034_dtotantitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f034_dtotantitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f034_dtotantitem' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF034Dtotantitem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f034_dtotantitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f034_dtotantitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f034_dtotantitem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f034_dtotantitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f034_dtotantitem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f035_dtotant" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f035_dtotant' ?>" >
				  
                                        <?php Lang::_lang('eku_f035_dtotant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f035_dtotant" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f035_dtotant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f035_dtotant' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f035_dtotant' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF035Dtotant(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f035_dtotant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f035_dtotant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f035_dtotant', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f035_dtotant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f035_dtotant')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f010_dporcdesctotal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal' ?>" >
				  
                                        <?php Lang::_lang('eku_f010_dporcdesctotal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f010_dporcdesctotal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f010_dporcdesctotal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f010_dporcdesctotal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f010_dporcdesctotal' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF010Dporcdesctotal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f010_dporcdesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f010_dporcdesctotal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f010_dporcdesctotal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f010_dporcdesctotal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f010_dporcdesctotal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f011_ddesctotal" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f011_ddesctotal' ?>" >
				  
                                        <?php Lang::_lang('eku_f011_ddesctotal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f011_ddesctotal" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f011_ddesctotal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f011_ddesctotal' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f011_ddesctotal' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF011Ddesctotal(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f011_ddesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f011_ddesctotal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f011_ddesctotal', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f011_ddesctotal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f011_ddesctotal')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f012_danticipo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f012_danticipo' ?>" >
				  
                                        <?php Lang::_lang('eku_f012_danticipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f012_danticipo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f012_danticipo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f012_danticipo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f012_danticipo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF012Danticipo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f012_danticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f012_danticipo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f012_danticipo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f012_danticipo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f012_danticipo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f013_dredon" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f013_dredon' ?>" >
				  
                                        <?php Lang::_lang('eku_f013_dredon', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f013_dredon" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f013_dredon')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f013_dredon' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f013_dredon' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF013Dredon(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f013_dredon', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f013_dredon', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f013_dredon', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f013_dredon', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f013_dredon')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f025_dcomi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f025_dcomi' ?>" >
				  
                                        <?php Lang::_lang('eku_f025_dcomi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f025_dcomi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f025_dcomi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f025_dcomi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f025_dcomi' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF025Dcomi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f025_dcomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f025_dcomi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f025_dcomi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f025_dcomi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f025_dcomi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f014_dtotgralope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f014_dtotgralope' ?>" >
				  
                                        <?php Lang::_lang('eku_f014_dtotgralope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f014_dtotgralope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f014_dtotgralope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f014_dtotgralope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f014_dtotgralope' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF014Dtotgralope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f014_dtotgralope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f014_dtotgralope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f014_dtotgralope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f014_dtotgralope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f014_dtotgralope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f015_diva5" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f015_diva5' ?>" >
				  
                                        <?php Lang::_lang('eku_f015_diva5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f015_diva5" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f015_diva5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f015_diva5' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f015_diva5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF015Diva5(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f015_diva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f015_diva5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f015_diva5', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f015_diva5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f015_diva5')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f016_diva10" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f016_diva10' ?>" >
				  
                                        <?php Lang::_lang('eku_f016_diva10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f016_diva10" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f016_diva10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f016_diva10' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f016_diva10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF016Diva10(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f016_diva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f016_diva10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f016_diva10', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f016_diva10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f016_diva10')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f036_dliqtotiva5" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5' ?>" >
				  
                                        <?php Lang::_lang('eku_f036_dliqtotiva5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f036_dliqtotiva5" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f036_dliqtotiva5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f036_dliqtotiva5' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f036_dliqtotiva5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF036Dliqtotiva5(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f036_dliqtotiva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f036_dliqtotiva5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f036_dliqtotiva5', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f036_dliqtotiva5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f036_dliqtotiva5')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f037_dliqtotiva10" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10' ?>" >
				  
                                        <?php Lang::_lang('eku_f037_dliqtotiva10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f037_dliqtotiva10" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f037_dliqtotiva10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f037_dliqtotiva10' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f037_dliqtotiva10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF037Dliqtotiva10(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f037_dliqtotiva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f037_dliqtotiva10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f037_dliqtotiva10', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f037_dliqtotiva10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f037_dliqtotiva10')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f026_divacomi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f026_divacomi' ?>" >
				  
                                        <?php Lang::_lang('eku_f026_divacomi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f026_divacomi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f026_divacomi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f026_divacomi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f026_divacomi' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF026Divacomi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f026_divacomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f026_divacomi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f026_divacomi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f026_divacomi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f026_divacomi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f017_dtotiva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f017_dtotiva' ?>" >
				  
                                        <?php Lang::_lang('eku_f017_dtotiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f017_dtotiva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f017_dtotiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f017_dtotiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f017_dtotiva' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF017Dtotiva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f017_dtotiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f017_dtotiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f017_dtotiva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f017_dtotiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f017_dtotiva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f018_dbasegrav5" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f018_dbasegrav5' ?>" >
				  
                                        <?php Lang::_lang('eku_f018_dbasegrav5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f018_dbasegrav5" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f018_dbasegrav5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f018_dbasegrav5' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f018_dbasegrav5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF018Dbasegrav5(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f018_dbasegrav5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f018_dbasegrav5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f018_dbasegrav5', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f018_dbasegrav5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f018_dbasegrav5')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f019_dbasegrav10" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f019_dbasegrav10' ?>" >
				  
                                        <?php Lang::_lang('eku_f019_dbasegrav10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f019_dbasegrav10" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f019_dbasegrav10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f019_dbasegrav10' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f019_dbasegrav10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF019Dbasegrav10(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f019_dbasegrav10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f019_dbasegrav10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f019_dbasegrav10', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f019_dbasegrav10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f019_dbasegrav10')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f020_dtbasgraiva" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva' ?>" >
				  
                                        <?php Lang::_lang('eku_f020_dtbasgraiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f020_dtbasgraiva" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f020_dtbasgraiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f020_dtbasgraiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f020_dtbasgraiva' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF020Dtbasgraiva(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f020_dtbasgraiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f020_dtbasgraiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f020_dtbasgraiva', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f020_dtbasgraiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f020_dtbasgraiva')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f023_dtotalgs" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f023_dtotalgs' ?>" >
				  
                                        <?php Lang::_lang('eku_f023_dtotalgs', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f023_dtotalgs" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f023_dtotalgs')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f023_dtotalgs' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f023_dtotalgs' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF023Dtotalgs(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f023_dtotalgs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f023_dtotalgs', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f023_dtotalgs', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f023_dtotalgs', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f023_dtotalgs')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_eku_f024_dtotcom" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f024_dtotcom' ?>" >
				  
                                        <?php Lang::_lang('eku_f024_dtotcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_eku_f024_dtotcom" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_f024_dtotcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_eku_f024_dtotcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_eku_f024_dtotcom' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF024Dtotcom(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f024_dtotcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_eku_f024_dtotcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f024_dtotcom', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_eku_f024_dtotcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f024_dtotcom')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_f001_g_tot_sub_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_f001_g_tot_sub_txt_codigo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_f001_g_tot_sub_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_f001_g_tot_sub_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_f001_g_tot_sub_txa_observacion' rows='10' cols='50' id='eku_de_f001_g_tot_sub_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_f001_g_tot_sub_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_f001_g_tot_sub_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_f001_g_tot_sub_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_f001_g_tot_sub_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_f001_g_tot_sub'/>
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

