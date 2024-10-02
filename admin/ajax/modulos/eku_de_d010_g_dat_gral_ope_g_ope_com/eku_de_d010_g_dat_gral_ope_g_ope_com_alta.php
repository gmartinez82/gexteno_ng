<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_d010_g_dat_gral_ope_g_ope_com';
$db_nombre_pagina = 'eku_de_d010_g_dat_gral_ope_g_ope_com_alta';

$eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
	if(trim($hdn_id) != '') $eku_de_d010_g_dat_gral_ope_g_ope_com->setId($hdn_id, false);
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setDescripcion(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_descripcion"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuDeId(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id", null));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD011Itiptra(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d011_itiptra"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD012Ddestiptra(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d012_ddestiptra"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD013Itimp(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d013_itimp"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD014Ddestimp(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d014_ddestimp"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD015Cmoneope(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d015_cmoneope"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD016Ddesmoneope(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d016_ddesmoneope"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD017Dcondticam(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d017_dcondticam"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD018Dticam(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d018_dticam"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD019Icondant(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d019_icondant"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD020Ddescondant(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d020_ddescondant"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCodigo(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_codigo"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setObservacion(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txa_observacion"));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setOrden(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_orden", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_estado", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_creado")));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCreadoPor(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com__creado_por", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com_txt_modificado")));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setModificadoPor(Gral::getVars(1, "eku_de_d010_g_dat_gral_ope_g_ope_com__modificado_por", 0));

	$eku_de_d010_g_dat_gral_ope_g_ope_com_estado = new EkuDeD010GDatGralOpeGOpeCom();
	if(trim($hdn_id) != ''){
		$eku_de_d010_g_dat_gral_ope_g_ope_com_estado->setId($hdn_id);
		$eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado($eku_de_d010_g_dat_gral_ope_g_ope_com_estado->getEstado());
				
	}else{
		$eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_d010_g_dat_gral_ope_g_ope_com->control();
			if(!$error->getExisteError()){
				$eku_de_d010_g_dat_gral_ope_g_ope_com->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_d010_g_dat_gral_ope_g_ope_com_alta.php?cs=1&id='.$eku_de_d010_g_dat_gral_ope_g_ope_com->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_d010_g_dat_gral_ope_g_ope_com->control();
			if(!$error->getExisteError()){
				$eku_de_d010_g_dat_gral_ope_g_ope_com->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_d010_g_dat_gral_ope_g_ope_com_alta.php?cs=1');
				$eku_de_d010_g_dat_gral_ope_g_ope_com = new EkuDeD010GDatGralOpeGOpeCom();
			}
		break;
	}
	Gral::setSes('EkuDeD010GDatGralOpeGOpeCom_ULTIMO_INSERTADO', $eku_de_d010_g_dat_gral_ope_g_ope_com->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_d010_g_dat_gral_ope_g_ope_com_id = Gral::getVars(2, $prefijo.'cmb_eku_de_d010_g_dat_gral_ope_g_ope_com_id', 0);
	if($cmb_eku_de_d010_g_dat_gral_ope_g_ope_com_id != 0){
		$eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($cmb_eku_de_d010_g_dat_gral_ope_g_ope_com_id);
	}else{
	
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD011Itiptra(Gral::getVars(2, "eku_d011_itiptra", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD012Ddestiptra(Gral::getVars(2, "eku_d012_ddestiptra", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD013Itimp(Gral::getVars(2, "eku_d013_itimp", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD014Ddestimp(Gral::getVars(2, "eku_d014_ddestimp", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD015Cmoneope(Gral::getVars(2, "eku_d015_cmoneope", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD016Ddesmoneope(Gral::getVars(2, "eku_d016_ddesmoneope", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD017Dcondticam(Gral::getVars(2, "eku_d017_dcondticam", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD018Dticam(Gral::getVars(2, "eku_d018_dticam", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD019Icondant(Gral::getVars(2, "eku_d019_icondant", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEkuD020Ddescondant(Gral::getVars(2, "eku_d020_ddescondant", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_d010_g_dat_gral_ope_g_ope_com->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_d010_g_dat_gral_ope_g_ope_com->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_d010_g_dat_gral_ope_g_ope_com' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d010_g_dat_gral_ope_g_ope_com_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d010_g_dat_gral_ope_g_ope_com_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_d010_g_dat_gral_ope_g_ope_com_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d011_itiptra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d011_itiptra' ?>" >
				  
                                        <?php Lang::_lang('eku_d011_itiptra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d011_itiptra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d011_itiptra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d011_itiptra' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d011_itiptra' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD011Itiptra(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d011_itiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d011_itiptra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d011_itiptra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d011_itiptra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d011_itiptra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d012_ddestiptra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d012_ddestiptra' ?>" >
				  
                                        <?php Lang::_lang('eku_d012_ddestiptra', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d012_ddestiptra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d012_ddestiptra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d012_ddestiptra' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d012_ddestiptra' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d012_ddestiptra', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d012_ddestiptra', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d012_ddestiptra', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d012_ddestiptra', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d012_ddestiptra')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d013_itimp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d013_itimp' ?>" >
				  
                                        <?php Lang::_lang('eku_d013_itimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d013_itimp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d013_itimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d013_itimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d013_itimp' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD013Itimp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d013_itimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d013_itimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d013_itimp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d013_itimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d013_itimp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d014_ddestimp" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d014_ddestimp' ?>" >
				  
                                        <?php Lang::_lang('eku_d014_ddestimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d014_ddestimp" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d014_ddestimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d014_ddestimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d014_ddestimp' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD014Ddestimp(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d014_ddestimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d014_ddestimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d014_ddestimp', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d014_ddestimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d014_ddestimp')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d015_cmoneope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d015_cmoneope' ?>" >
				  
                                        <?php Lang::_lang('eku_d015_cmoneope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d015_cmoneope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d015_cmoneope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d015_cmoneope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d015_cmoneope' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d015_cmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d015_cmoneope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d015_cmoneope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d015_cmoneope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d015_cmoneope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d016_ddesmoneope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d016_ddesmoneope' ?>" >
				  
                                        <?php Lang::_lang('eku_d016_ddesmoneope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d016_ddesmoneope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d016_ddesmoneope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d016_ddesmoneope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d016_ddesmoneope' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d016_ddesmoneope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d016_ddesmoneope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d016_ddesmoneope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d016_ddesmoneope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d016_ddesmoneope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d017_dcondticam" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d017_dcondticam' ?>" >
				  
                                        <?php Lang::_lang('eku_d017_dcondticam', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d017_dcondticam" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d017_dcondticam')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d017_dcondticam' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d017_dcondticam' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD017Dcondticam(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d017_dcondticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d017_dcondticam', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d017_dcondticam', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d017_dcondticam', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d017_dcondticam')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d018_dticam" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d018_dticam' ?>" >
				  
                                        <?php Lang::_lang('eku_d018_dticam', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d018_dticam" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d018_dticam')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d018_dticam' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d018_dticam' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018Dticam(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d018_dticam', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d018_dticam', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d018_dticam', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d018_dticam', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d018_dticam')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d019_icondant" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d019_icondant' ?>" >
				  
                                        <?php Lang::_lang('eku_d019_icondant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d019_icondant" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d019_icondant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d019_icondant' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d019_icondant' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD019Icondant(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d019_icondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d019_icondant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d019_icondant', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d019_icondant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d019_icondant')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d020_ddescondant" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d020_ddescondant' ?>" >
				  
                                        <?php Lang::_lang('eku_d020_ddescondant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d020_ddescondant" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d020_ddescondant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d020_ddescondant' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_eku_d020_ddescondant' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD020Ddescondant(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d020_ddescondant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d020_ddescondant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d020_ddescondant', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_eku_d020_ddescondant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d020_ddescondant')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txt_codigo' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d010_g_dat_gral_ope_g_ope_com_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d010_g_dat_gral_ope_g_ope_com_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_d010_g_dat_gral_ope_g_ope_com_txa_observacion' rows='10' cols='50' id='eku_de_d010_g_dat_gral_ope_g_ope_com_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d010_g_dat_gral_ope_g_ope_com_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d010_g_dat_gral_ope_g_ope_com->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_d010_g_dat_gral_ope_g_ope_com_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_d010_g_dat_gral_ope_g_ope_com'/>
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

