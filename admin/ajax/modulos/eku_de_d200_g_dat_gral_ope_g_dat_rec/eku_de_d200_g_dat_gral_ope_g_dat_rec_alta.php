<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_d200_g_dat_gral_ope_g_dat_rec';
$db_nombre_pagina = 'eku_de_d200_g_dat_gral_ope_g_dat_rec_alta';

$eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
	if(trim($hdn_id) != '') $eku_de_d200_g_dat_gral_ope_g_dat_rec->setId($hdn_id, false);
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setDescripcion(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_descripcion"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuDeId(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id", null));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD201Inatrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d201_inatrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD202Itiope(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d202_itiope"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD203Cpaisrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d203_cpaisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD204Ddespaisre(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d204_ddespaisre"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD205Iticontrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d205_iticontrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD206Drucrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d206_drucrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD207Ddvrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d207_ddvrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD208Itipidrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d208_itipidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD209Ddtipidrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d209_ddtipidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD210Dnumidrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d210_dnumidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD211Dnomrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d211_dnomrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD212Dnomfanrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d212_dnomfanrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD213Ddirrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d213_ddirrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD218Dnumcasrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d218_dnumcasrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD219Cdeprec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d219_cdeprec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD220Ddesdeprec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d220_ddesdeprec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD221Cdisrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d221_cdisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD222Ddesdisrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d222_ddesdisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD223Cciurec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d223_cciurec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD224Ddesciurec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d224_ddesciurec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD214Dtelrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d214_dtelrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD215Dcelrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d215_dcelrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD216Demailrec(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d216_demailrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD217Dcodcliente(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d217_dcodcliente"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCodigo(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_codigo"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setObservacion(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txa_observacion"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setOrden(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_orden", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_estado", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_creado")));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCreadoPor(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec__creado_por", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_modificado")));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setModificadoPor(Gral::getVars(1, "eku_de_d200_g_dat_gral_ope_g_dat_rec__modificado_por", 0));

	$eku_de_d200_g_dat_gral_ope_g_dat_rec_estado = new EkuDeD200GDatGralOpeGDatRec();
	if(trim($hdn_id) != ''){
		$eku_de_d200_g_dat_gral_ope_g_dat_rec_estado->setId($hdn_id);
		$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado($eku_de_d200_g_dat_gral_ope_g_dat_rec_estado->getEstado());
				
	}else{
		$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_d200_g_dat_gral_ope_g_dat_rec->control();
			if(!$error->getExisteError()){
				$eku_de_d200_g_dat_gral_ope_g_dat_rec->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php?cs=1&id='.$eku_de_d200_g_dat_gral_ope_g_dat_rec->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_d200_g_dat_gral_ope_g_dat_rec->control();
			if(!$error->getExisteError()){
				$eku_de_d200_g_dat_gral_ope_g_dat_rec->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php?cs=1');
				$eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
			}
		break;
	}
	Gral::setSes('EkuDeD200GDatGralOpeGDatRec_ULTIMO_INSERTADO', $eku_de_d200_g_dat_gral_ope_g_dat_rec->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_d200_g_dat_gral_ope_g_dat_rec_id = Gral::getVars(2, $prefijo.'cmb_eku_de_d200_g_dat_gral_ope_g_dat_rec_id', 0);
	if($cmb_eku_de_d200_g_dat_gral_ope_g_dat_rec_id != 0){
		$eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($cmb_eku_de_d200_g_dat_gral_ope_g_dat_rec_id);
	}else{
	
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD201Inatrec(Gral::getVars(2, "eku_d201_inatrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD202Itiope(Gral::getVars(2, "eku_d202_itiope", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD203Cpaisrec(Gral::getVars(2, "eku_d203_cpaisrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD204Ddespaisre(Gral::getVars(2, "eku_d204_ddespaisre", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD205Iticontrec(Gral::getVars(2, "eku_d205_iticontrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD206Drucrec(Gral::getVars(2, "eku_d206_drucrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD207Ddvrec(Gral::getVars(2, "eku_d207_ddvrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD208Itipidrec(Gral::getVars(2, "eku_d208_itipidrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD209Ddtipidrec(Gral::getVars(2, "eku_d209_ddtipidrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD210Dnumidrec(Gral::getVars(2, "eku_d210_dnumidrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD211Dnomrec(Gral::getVars(2, "eku_d211_dnomrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD212Dnomfanrec(Gral::getVars(2, "eku_d212_dnomfanrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD213Ddirrec(Gral::getVars(2, "eku_d213_ddirrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD218Dnumcasrec(Gral::getVars(2, "eku_d218_dnumcasrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD219Cdeprec(Gral::getVars(2, "eku_d219_cdeprec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD220Ddesdeprec(Gral::getVars(2, "eku_d220_ddesdeprec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD221Cdisrec(Gral::getVars(2, "eku_d221_cdisrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD222Ddesdisrec(Gral::getVars(2, "eku_d222_ddesdisrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD223Cciurec(Gral::getVars(2, "eku_d223_cciurec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD224Ddesciurec(Gral::getVars(2, "eku_d224_ddesciurec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD214Dtelrec(Gral::getVars(2, "eku_d214_dtelrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD215Dcelrec(Gral::getVars(2, "eku_d215_dcelrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD216Demailrec(Gral::getVars(2, "eku_d216_demailrec", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD217Dcodcliente(Gral::getVars(2, "eku_d217_dcodcliente", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_d200_g_dat_gral_ope_g_dat_rec->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_d200_g_dat_gral_ope_g_dat_rec' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d200_g_dat_gral_ope_g_dat_rec_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_d200_g_dat_gral_ope_g_dat_rec_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_d200_g_dat_gral_ope_g_dat_rec_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d201_inatrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d201_inatrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d201_inatrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d201_inatrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d201_inatrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d201_inatrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d201_inatrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d201_inatrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d201_inatrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d201_inatrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d201_inatrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d201_inatrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d202_itiope" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d202_itiope' ?>" >
				  
                                        <?php Lang::_lang('eku_d202_itiope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d202_itiope" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d202_itiope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d202_itiope' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d202_itiope' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD202Itiope(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d202_itiope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d202_itiope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d202_itiope', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d202_itiope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d202_itiope')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d203_cpaisrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d203_cpaisrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d203_cpaisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d203_cpaisrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d203_cpaisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d203_cpaisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d203_cpaisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD203Cpaisrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d203_cpaisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d203_cpaisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d203_cpaisrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d203_cpaisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d203_cpaisrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d204_ddespaisre" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d204_ddespaisre' ?>" >
				  
                                        <?php Lang::_lang('eku_d204_ddespaisre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d204_ddespaisre" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d204_ddespaisre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d204_ddespaisre' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d204_ddespaisre' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD204Ddespaisre(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d204_ddespaisre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d204_ddespaisre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d204_ddespaisre', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d204_ddespaisre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d204_ddespaisre')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d205_iticontrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d205_iticontrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d205_iticontrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d205_iticontrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d205_iticontrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d205_iticontrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d205_iticontrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD205Iticontrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d205_iticontrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d205_iticontrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d205_iticontrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d205_iticontrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d205_iticontrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d206_drucrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d206_drucrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d206_drucrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d206_drucrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d206_drucrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d206_drucrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d206_drucrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d206_drucrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d206_drucrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d206_drucrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d206_drucrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d206_drucrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d207_ddvrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d207_ddvrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d207_ddvrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d207_ddvrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d207_ddvrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d207_ddvrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d207_ddvrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d207_ddvrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d207_ddvrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d207_ddvrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d207_ddvrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d207_ddvrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d208_itipidrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d208_itipidrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d208_itipidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d208_itipidrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d208_itipidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d208_itipidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d208_itipidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD208Itipidrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d208_itipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d208_itipidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d208_itipidrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d208_itipidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d208_itipidrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d209_ddtipidrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d209_ddtipidrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d209_ddtipidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d209_ddtipidrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d209_ddtipidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d209_ddtipidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d209_ddtipidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD209Ddtipidrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d209_ddtipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d209_ddtipidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d209_ddtipidrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d209_ddtipidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d209_ddtipidrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d210_dnumidrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d210_dnumidrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d210_dnumidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d210_dnumidrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d210_dnumidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d210_dnumidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d210_dnumidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d210_dnumidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d210_dnumidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d210_dnumidrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d210_dnumidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d210_dnumidrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d211_dnomrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d211_dnomrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d211_dnomrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d211_dnomrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d211_dnomrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d211_dnomrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d211_dnomrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d211_dnomrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d211_dnomrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d211_dnomrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d211_dnomrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d211_dnomrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d212_dnomfanrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d212_dnomfanrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d212_dnomfanrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d212_dnomfanrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d212_dnomfanrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d212_dnomfanrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d212_dnomfanrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD212Dnomfanrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d212_dnomfanrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d212_dnomfanrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d212_dnomfanrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d212_dnomfanrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d212_dnomfanrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d213_ddirrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d213_ddirrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d213_ddirrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d213_ddirrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d213_ddirrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d213_ddirrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d213_ddirrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d213_ddirrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d213_ddirrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d213_ddirrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d213_ddirrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d213_ddirrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d218_dnumcasrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d218_dnumcasrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d218_dnumcasrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d218_dnumcasrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d218_dnumcasrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d218_dnumcasrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d218_dnumcasrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD218Dnumcasrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d218_dnumcasrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d218_dnumcasrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d218_dnumcasrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d218_dnumcasrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d218_dnumcasrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d219_cdeprec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d219_cdeprec' ?>" >
				  
                                        <?php Lang::_lang('eku_d219_cdeprec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d219_cdeprec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d219_cdeprec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d219_cdeprec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d219_cdeprec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD219Cdeprec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d219_cdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d219_cdeprec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d219_cdeprec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d219_cdeprec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d219_cdeprec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d220_ddesdeprec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d220_ddesdeprec' ?>" >
				  
                                        <?php Lang::_lang('eku_d220_ddesdeprec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d220_ddesdeprec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d220_ddesdeprec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d220_ddesdeprec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d220_ddesdeprec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD220Ddesdeprec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d220_ddesdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d220_ddesdeprec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d220_ddesdeprec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d220_ddesdeprec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d220_ddesdeprec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d221_cdisrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d221_cdisrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d221_cdisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d221_cdisrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d221_cdisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d221_cdisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d221_cdisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD221Cdisrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d221_cdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d221_cdisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d221_cdisrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d221_cdisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d221_cdisrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d222_ddesdisrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d222_ddesdisrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d222_ddesdisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d222_ddesdisrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d222_ddesdisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d222_ddesdisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d222_ddesdisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD222Ddesdisrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d222_ddesdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d222_ddesdisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d222_ddesdisrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d222_ddesdisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d222_ddesdisrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d223_cciurec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d223_cciurec' ?>" >
				  
                                        <?php Lang::_lang('eku_d223_cciurec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d223_cciurec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d223_cciurec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d223_cciurec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d223_cciurec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD223Cciurec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d223_cciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d223_cciurec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d223_cciurec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d223_cciurec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d223_cciurec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d224_ddesciurec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d224_ddesciurec' ?>" >
				  
                                        <?php Lang::_lang('eku_d224_ddesciurec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d224_ddesciurec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d224_ddesciurec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d224_ddesciurec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d224_ddesciurec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD224Ddesciurec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d224_ddesciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d224_ddesciurec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d224_ddesciurec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d224_ddesciurec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d224_ddesciurec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d214_dtelrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d214_dtelrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d214_dtelrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d214_dtelrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d214_dtelrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d214_dtelrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d214_dtelrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d214_dtelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d214_dtelrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d214_dtelrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d214_dtelrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d214_dtelrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d215_dcelrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d215_dcelrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d215_dcelrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d215_dcelrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d215_dcelrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d215_dcelrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d215_dcelrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD215Dcelrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d215_dcelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d215_dcelrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d215_dcelrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d215_dcelrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d215_dcelrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d216_demailrec" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d216_demailrec' ?>" >
				  
                                        <?php Lang::_lang('eku_d216_demailrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d216_demailrec" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d216_demailrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d216_demailrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d216_demailrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d216_demailrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d216_demailrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d216_demailrec', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d216_demailrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d216_demailrec')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d217_dcodcliente" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d217_dcodcliente' ?>" >
				  
                                        <?php Lang::_lang('eku_d217_dcodcliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d217_dcodcliente" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_d217_dcodcliente')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d217_dcodcliente' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_eku_d217_dcodcliente' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD217Dcodcliente(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d217_dcodcliente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d217_dcodcliente', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d217_dcodcliente', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_eku_d217_dcodcliente', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d217_dcodcliente')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txt_codigo' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_d200_g_dat_gral_ope_g_dat_rec_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_d200_g_dat_gral_ope_g_dat_rec_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_d200_g_dat_gral_ope_g_dat_rec_txa_observacion' rows='10' cols='50' id='eku_de_d200_g_dat_gral_ope_g_dat_rec_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_d200_g_dat_gral_ope_g_dat_rec_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_d200_g_dat_gral_ope_g_dat_rec'/>
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

