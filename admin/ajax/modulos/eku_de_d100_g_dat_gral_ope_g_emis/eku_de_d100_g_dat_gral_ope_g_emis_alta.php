<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_d100_g_dat_gral_ope_g_emis';
$db_nombre_pagina = 'eku_de_d100_g_dat_gral_ope_g_emis_alta';

$eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
	if(trim($hdn_id) != '') $eku_de_d100_g_dat_gral_ope_g_emis->setId($hdn_id, false);
	$eku_de_d100_g_dat_gral_ope_g_emis->setDescripcion(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_descripcion"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuDeId(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id", null));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD101Drucem(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d101_drucem"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD102Ddvemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d102_ddvemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD103Itipcont(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d103_itipcont"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD104Ctipreg(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d104_ctipreg"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD105Dnomemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d105_dnomemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD106Dnomfanemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d106_dnomfanemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD107Ddiremi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d107_ddiremi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD108Dnumcas(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d108_dnumcas"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD109Dcompdir1(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d109_dcompdir1"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD110Dcompdir2(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d110_dcompdir2"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD111Cdepemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d111_cdepemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD112Ddesdepemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d112_ddesdepemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD113Cdisemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d113_cdisemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD114Ddesdisemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d114_ddesdisemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD115Cciuemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d115_cciuemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD116Ddesciuemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d116_ddesciuemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD117Dtelemi(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d117_dtelemi"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD118Demaile(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d118_demaile"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD119Ddensuc(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d119_ddensuc"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCodigo(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_codigo"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setObservacion(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txa_observacion"));
	$eku_de_d100_g_dat_gral_ope_g_emis->setOrden(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_orden", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEstado(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_cmb_estado", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_creado")));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCreadoPor(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis__creado_por", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis_txt_modificado")));
	$eku_de_d100_g_dat_gral_ope_g_emis->setModificadoPor(Gral::getVars(1, "eku_de_d100_g_dat_gral_ope_g_emis__modificado_por", 0));

	$eku_de_d100_g_dat_gral_ope_g_emis_estado = new EkuDeD100GDatGralOpeGEmis();
	if(trim($hdn_id) != ''){
		$eku_de_d100_g_dat_gral_ope_g_emis_estado->setId($hdn_id);
		$eku_de_d100_g_dat_gral_ope_g_emis->setEstado($eku_de_d100_g_dat_gral_ope_g_emis_estado->getEstado());
				
	}else{
		$eku_de_d100_g_dat_gral_ope_g_emis->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_d100_g_dat_gral_ope_g_emis->control();
			if(!$error->getExisteError()){
				$eku_de_d100_g_dat_gral_ope_g_emis->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_d100_g_dat_gral_ope_g_emis_alta.php?cs=1&id='.$eku_de_d100_g_dat_gral_ope_g_emis->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_d100_g_dat_gral_ope_g_emis->control();
			if(!$error->getExisteError()){
				$eku_de_d100_g_dat_gral_ope_g_emis->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_d100_g_dat_gral_ope_g_emis_alta.php?cs=1');
				$eku_de_d100_g_dat_gral_ope_g_emis = new EkuDeD100GDatGralOpeGEmis();
			}
		break;
	}
	Gral::setSes('EkuDeD100GDatGralOpeGEmis_ULTIMO_INSERTADO', $eku_de_d100_g_dat_gral_ope_g_emis->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_d100_g_dat_gral_ope_g_emis_id = Gral::getVars(2, $prefijo.'cmb_eku_de_d100_g_dat_gral_ope_g_emis_id', 0);
	if($cmb_eku_de_d100_g_dat_gral_ope_g_emis_id != 0){
		$eku_de_d100_g_dat_gral_ope_g_emis = EkuDeD100GDatGralOpeGEmis::getOxId($cmb_eku_de_d100_g_dat_gral_ope_g_emis_id);
	}else{
	
	$eku_de_d100_g_dat_gral_ope_g_emis->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD101Drucem(Gral::getVars(2, "eku_d101_drucem", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD102Ddvemi(Gral::getVars(2, "eku_d102_ddvemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD103Itipcont(Gral::getVars(2, "eku_d103_itipcont", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD104Ctipreg(Gral::getVars(2, "eku_d104_ctipreg", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD105Dnomemi(Gral::getVars(2, "eku_d105_dnomemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD106Dnomfanemi(Gral::getVars(2, "eku_d106_dnomfanemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD107Ddiremi(Gral::getVars(2, "eku_d107_ddiremi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD108Dnumcas(Gral::getVars(2, "eku_d108_dnumcas", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD109Dcompdir1(Gral::getVars(2, "eku_d109_dcompdir1", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD110Dcompdir2(Gral::getVars(2, "eku_d110_dcompdir2", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD111Cdepemi(Gral::getVars(2, "eku_d111_cdepemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD112Ddesdepemi(Gral::getVars(2, "eku_d112_ddesdepemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD113Cdisemi(Gral::getVars(2, "eku_d113_cdisemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD114Ddesdisemi(Gral::getVars(2, "eku_d114_ddesdisemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD115Cciuemi(Gral::getVars(2, "eku_d115_cciuemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD116Ddesciuemi(Gral::getVars(2, "eku_d116_ddesciuemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD117Dtelemi(Gral::getVars(2, "eku_d117_dtelemi", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD118Demaile(Gral::getVars(2, "eku_d118_demaile", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEkuD119Ddensuc(Gral::getVars(2, "eku_d119_ddensuc", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_d100_g_dat_gral_ope_g_emis->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_d100_g_dat_gral_ope_g_emis->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_d100_g_dat_gral_ope_g_emis->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_d100_g_dat_gral_ope_g_emis->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_d100_g_dat_gral_ope_g_emis->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_d100_g_dat_gral_ope_g_emis' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_d100_g_dat_gral_ope_g_emis->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d100_g_dat_gral_ope_g_emis_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d100_g_dat_gral_ope_g_emis->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d100_g_dat_gral_ope_g_emis_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_d100_g_dat_gral_ope_g_emis_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d101_drucem" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d101_drucem' ?>" >
				  
                                        <?php Lang::_lang('eku_d101_drucem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d101_drucem" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d101_drucem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d101_drucem' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d101_drucem' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d101_drucem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d101_drucem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d101_drucem', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d101_drucem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d101_drucem')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d102_ddvemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d102_ddvemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d102_ddvemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d102_ddvemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d102_ddvemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d102_ddvemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d102_ddvemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d102_ddvemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d102_ddvemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d102_ddvemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d102_ddvemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d102_ddvemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d103_itipcont" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d103_itipcont' ?>" >
				  
                                        <?php Lang::_lang('eku_d103_itipcont', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d103_itipcont" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d103_itipcont')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d103_itipcont' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d103_itipcont' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d103_itipcont', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d103_itipcont', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d103_itipcont', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d103_itipcont', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d103_itipcont')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d104_ctipreg" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d104_ctipreg' ?>" >
				  
                                        <?php Lang::_lang('eku_d104_ctipreg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d104_ctipreg" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d104_ctipreg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d104_ctipreg' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d104_ctipreg' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD104Ctipreg(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d104_ctipreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d104_ctipreg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d104_ctipreg', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d104_ctipreg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d104_ctipreg')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d105_dnomemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d105_dnomemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d105_dnomemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d105_dnomemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d105_dnomemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d105_dnomemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d105_dnomemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d105_dnomemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d105_dnomemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d105_dnomemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d105_dnomemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d105_dnomemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d106_dnomfanemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d106_dnomfanemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d106_dnomfanemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d106_dnomfanemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d106_dnomfanemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d106_dnomfanemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d106_dnomfanemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d106_dnomfanemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d106_dnomfanemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d106_dnomfanemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d106_dnomfanemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d106_dnomfanemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d107_ddiremi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d107_ddiremi' ?>" >
				  
                                        <?php Lang::_lang('eku_d107_ddiremi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d107_ddiremi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d107_ddiremi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d107_ddiremi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d107_ddiremi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d107_ddiremi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d107_ddiremi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d107_ddiremi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d107_ddiremi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d107_ddiremi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d108_dnumcas" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d108_dnumcas' ?>" >
				  
                                        <?php Lang::_lang('eku_d108_dnumcas', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d108_dnumcas" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d108_dnumcas')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d108_dnumcas' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d108_dnumcas' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD108Dnumcas(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d108_dnumcas', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d108_dnumcas', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d108_dnumcas', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d108_dnumcas', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d108_dnumcas')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d109_dcompdir1" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d109_dcompdir1' ?>" >
				  
                                        <?php Lang::_lang('eku_d109_dcompdir1', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d109_dcompdir1" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d109_dcompdir1')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d109_dcompdir1' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d109_dcompdir1' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD109Dcompdir1(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d109_dcompdir1', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d109_dcompdir1', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d109_dcompdir1', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d109_dcompdir1', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d109_dcompdir1')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d110_dcompdir2" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d110_dcompdir2' ?>" >
				  
                                        <?php Lang::_lang('eku_d110_dcompdir2', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d110_dcompdir2" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d110_dcompdir2')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d110_dcompdir2' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d110_dcompdir2' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD110Dcompdir2(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d110_dcompdir2', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d110_dcompdir2', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d110_dcompdir2', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d110_dcompdir2', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d110_dcompdir2')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d111_cdepemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d111_cdepemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d111_cdepemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d111_cdepemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d111_cdepemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d111_cdepemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d111_cdepemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD111Cdepemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d111_cdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d111_cdepemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d111_cdepemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d111_cdepemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d111_cdepemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d112_ddesdepemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d112_ddesdepemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d112_ddesdepemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d112_ddesdepemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d112_ddesdepemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d112_ddesdepemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d112_ddesdepemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD112Ddesdepemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d112_ddesdepemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d112_ddesdepemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d112_ddesdepemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d112_ddesdepemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d112_ddesdepemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d113_cdisemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d113_cdisemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d113_cdisemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d113_cdisemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d113_cdisemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d113_cdisemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d113_cdisemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD113Cdisemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d113_cdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d113_cdisemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d113_cdisemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d113_cdisemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d113_cdisemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d114_ddesdisemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d114_ddesdisemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d114_ddesdisemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d114_ddesdisemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d114_ddesdisemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d114_ddesdisemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d114_ddesdisemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD114Ddesdisemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d114_ddesdisemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d114_ddesdisemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d114_ddesdisemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d114_ddesdisemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d114_ddesdisemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d115_cciuemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d115_cciuemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d115_cciuemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d115_cciuemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d115_cciuemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d115_cciuemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d115_cciuemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD115Cciuemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d115_cciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d115_cciuemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d115_cciuemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d115_cciuemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d115_cciuemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d116_ddesciuemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d116_ddesciuemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d116_ddesciuemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d116_ddesciuemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d116_ddesciuemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d116_ddesciuemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d116_ddesciuemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d116_ddesciuemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d116_ddesciuemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d116_ddesciuemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d116_ddesciuemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d116_ddesciuemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d117_dtelemi" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d117_dtelemi' ?>" >
				  
                                        <?php Lang::_lang('eku_d117_dtelemi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d117_dtelemi" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d117_dtelemi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d117_dtelemi' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d117_dtelemi' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d117_dtelemi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d117_dtelemi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d117_dtelemi', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d117_dtelemi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d117_dtelemi')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d118_demaile" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d118_demaile' ?>" >
				  
                                        <?php Lang::_lang('eku_d118_demaile', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d118_demaile" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d118_demaile')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d118_demaile' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d118_demaile' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d118_demaile', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d118_demaile', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d118_demaile', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d118_demaile', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d118_demaile')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d119_ddensuc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d119_ddensuc' ?>" >
				  
                                        <?php Lang::_lang('eku_d119_ddensuc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d119_ddensuc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d119_ddensuc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d119_ddensuc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_eku_d119_ddensuc' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD119Ddensuc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d119_ddensuc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d119_ddensuc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d119_ddensuc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_eku_d119_ddensuc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d119_ddensuc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d100_g_dat_gral_ope_g_emis_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d100_g_dat_gral_ope_g_emis_txt_codigo' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d100_g_dat_gral_ope_g_emis_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d100_g_dat_gral_ope_g_emis_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_d100_g_dat_gral_ope_g_emis_txa_observacion' rows='10' cols='50' id='eku_de_d100_g_dat_gral_ope_g_emis_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d100_g_dat_gral_ope_g_emis_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d100_g_dat_gral_ope_g_emis_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d100_g_dat_gral_ope_g_emis->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_d100_g_dat_gral_ope_g_emis_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_d100_g_dat_gral_ope_g_emis'/>
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

