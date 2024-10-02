<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_d200_g_dat_gral_ope_g_dat_rec';
$db_nombre_pagina = 'eku_de_d200_g_dat_gral_ope_g_dat_rec_alta';


$eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
    // if(trim($hdn_id) != '') $eku_de_d200_g_dat_gral_ope_g_dat_rec->setId($hdn_id, false);

    $eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($hdn_id);
    if(!$eku_de_d200_g_dat_gral_ope_g_dat_rec){
        $eku_de_d200_g_dat_gral_ope_g_dat_rec = new EkuDeD200GDatGralOpeGDatRec();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_d200_g_dat_gral_ope_g_dat_rec){
            if(EkuDeD200GDatGralOpeGDatRec::GEN_CONTROL_ALCANCE){
                if($eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD200GDatGralOpeGDatRec&id='.$eku_de_d200_g_dat_gral_ope_g_dat_rec->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA')){ 
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD201Inatrec(Gral::getVars(1, "txt_eku_d201_inatrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD202Itiope(Gral::getVars(1, "txt_eku_d202_itiope"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD203Cpaisrec(Gral::getVars(1, "txt_eku_d203_cpaisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD204Ddespaisre(Gral::getVars(1, "txt_eku_d204_ddespaisre"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD205Iticontrec(Gral::getVars(1, "txt_eku_d205_iticontrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD206Drucrec(Gral::getVars(1, "txt_eku_d206_drucrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD207Ddvrec(Gral::getVars(1, "txt_eku_d207_ddvrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD208Itipidrec(Gral::getVars(1, "txt_eku_d208_itipidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD209Ddtipidrec(Gral::getVars(1, "txt_eku_d209_ddtipidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD210Dnumidrec(Gral::getVars(1, "txt_eku_d210_dnumidrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD211Dnomrec(Gral::getVars(1, "txt_eku_d211_dnomrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD212Dnomfanrec(Gral::getVars(1, "txt_eku_d212_dnomfanrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD213Ddirrec(Gral::getVars(1, "txt_eku_d213_ddirrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD218Dnumcasrec(Gral::getVars(1, "txt_eku_d218_dnumcasrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD219Cdeprec(Gral::getVars(1, "txt_eku_d219_cdeprec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD220Ddesdeprec(Gral::getVars(1, "txt_eku_d220_ddesdeprec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD221Cdisrec(Gral::getVars(1, "txt_eku_d221_cdisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD222Ddesdisrec(Gral::getVars(1, "txt_eku_d222_ddesdisrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD223Cciurec(Gral::getVars(1, "txt_eku_d223_cciurec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD224Ddesciurec(Gral::getVars(1, "txt_eku_d224_ddesciurec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD214Dtelrec(Gral::getVars(1, "txt_eku_d214_dtelrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD215Dcelrec(Gral::getVars(1, "txt_eku_d215_dcelrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD216Demailrec(Gral::getVars(1, "txt_eku_d216_demailrec"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setEkuD217Dcodcliente(Gral::getVars(1, "txt_eku_d217_dcodcliente"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_d200_g_dat_gral_ope_g_dat_rec->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_d200_g_dat_gral_ope_g_dat_rec->control();
                if(!$error->getExisteError()){
                    $eku_de_d200_g_dat_gral_ope_g_dat_rec->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_d200_g_dat_gral_ope_g_dat_rec->getId().'&hash='.$eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_d200_g_dat_gral_ope_g_dat_rec->control();
                if(!$error->getExisteError()){
                    $eku_de_d200_g_dat_gral_ope_g_dat_rec->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_d200_g_dat_gral_ope_g_dat_rec->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_d200_g_dat_gral_ope_g_dat_rec){
                if(EkuDeD200GDatGralOpeGDatRec::GEN_CONTROL_ALCANCE){
                    if($eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeD200GDatGralOpeGDatRec&id='.$eku_de_d200_g_dat_gral_ope_g_dat_rec->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

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

?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
<?php include 'parciales/encabezado.php'?>
<?php include 'parciales/user.php';?>
<?php include 'parciales/mensajes.php' ?>
    
<div id='menu'>
    <?php include 'parciales/menuh.php' ?>
</div>

<div id='cuerpo' >
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_d200_g_dat_gral_ope_g_dat_rec' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeD200GDatGralOpeGDatRecs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD200GDatGralOpeGDatRec::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD200GDatGralOpeGDatRec::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_d200_g_dat_gral_ope_g_dat_rec'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d201_inatrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d201_inatrec' ?>" >

                    <?php Lang::_lang('eku_d201_inatrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d201_inatrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d201_inatrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d201_inatrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d201_inatrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d201_inatrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d201_inatrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d201_inatrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d201_inatrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d201_inatrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d201_inatrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d201_inatrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d201_inatrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d202_itiope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d202_itiope' ?>" >

                    <?php Lang::_lang('eku_d202_itiope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d202_itiope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d202_itiope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d202_itiope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d202_itiope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d202_itiope' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD202Itiope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d202_itiope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d202_itiope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d202_itiope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d202_itiope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d202_itiope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d202_itiope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d202_itiope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d203_cpaisrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d203_cpaisrec' ?>" >

                    <?php Lang::_lang('eku_d203_cpaisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d203_cpaisrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d203_cpaisrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d203_cpaisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d203_cpaisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d203_cpaisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD203Cpaisrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d203_cpaisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d203_cpaisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d203_cpaisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d203_cpaisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d203_cpaisrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d203_cpaisrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d203_cpaisrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d204_ddespaisre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d204_ddespaisre' ?>" >

                    <?php Lang::_lang('eku_d204_ddespaisre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d204_ddespaisre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d204_ddespaisre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d204_ddespaisre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d204_ddespaisre' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d204_ddespaisre' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD204Ddespaisre()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d204_ddespaisre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d204_ddespaisre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d204_ddespaisre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d204_ddespaisre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d204_ddespaisre')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d204_ddespaisre_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d204_ddespaisre_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d205_iticontrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d205_iticontrec' ?>" >

                    <?php Lang::_lang('eku_d205_iticontrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d205_iticontrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d205_iticontrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d205_iticontrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d205_iticontrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d205_iticontrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD205Iticontrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d205_iticontrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d205_iticontrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d205_iticontrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d205_iticontrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d205_iticontrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d205_iticontrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d205_iticontrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d206_drucrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d206_drucrec' ?>" >

                    <?php Lang::_lang('eku_d206_drucrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d206_drucrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d206_drucrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d206_drucrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d206_drucrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d206_drucrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d206_drucrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d206_drucrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d206_drucrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d206_drucrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d206_drucrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d206_drucrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d206_drucrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d207_ddvrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d207_ddvrec' ?>" >

                    <?php Lang::_lang('eku_d207_ddvrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d207_ddvrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d207_ddvrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d207_ddvrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d207_ddvrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d207_ddvrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d207_ddvrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d207_ddvrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d207_ddvrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d207_ddvrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d207_ddvrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d207_ddvrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d207_ddvrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d208_itipidrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d208_itipidrec' ?>" >

                    <?php Lang::_lang('eku_d208_itipidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d208_itipidrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d208_itipidrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d208_itipidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d208_itipidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d208_itipidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD208Itipidrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d208_itipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d208_itipidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d208_itipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d208_itipidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d208_itipidrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d208_itipidrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d208_itipidrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d209_ddtipidrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d209_ddtipidrec' ?>" >

                    <?php Lang::_lang('eku_d209_ddtipidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d209_ddtipidrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d209_ddtipidrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d209_ddtipidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d209_ddtipidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d209_ddtipidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD209Ddtipidrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d209_ddtipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d209_ddtipidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d209_ddtipidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d209_ddtipidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d209_ddtipidrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d209_ddtipidrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d209_ddtipidrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d210_dnumidrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d210_dnumidrec' ?>" >

                    <?php Lang::_lang('eku_d210_dnumidrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d210_dnumidrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d210_dnumidrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d210_dnumidrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d210_dnumidrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d210_dnumidrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d210_dnumidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d210_dnumidrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d210_dnumidrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d210_dnumidrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d210_dnumidrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d210_dnumidrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d210_dnumidrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d211_dnomrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d211_dnomrec' ?>" >

                    <?php Lang::_lang('eku_d211_dnomrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d211_dnomrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d211_dnomrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d211_dnomrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d211_dnomrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d211_dnomrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d211_dnomrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d211_dnomrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d211_dnomrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d211_dnomrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d211_dnomrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d211_dnomrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d211_dnomrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d212_dnomfanrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d212_dnomfanrec' ?>" >

                    <?php Lang::_lang('eku_d212_dnomfanrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d212_dnomfanrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d212_dnomfanrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d212_dnomfanrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d212_dnomfanrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d212_dnomfanrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD212Dnomfanrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d212_dnomfanrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d212_dnomfanrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d212_dnomfanrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d212_dnomfanrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d212_dnomfanrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d212_dnomfanrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d212_dnomfanrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d213_ddirrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d213_ddirrec' ?>" >

                    <?php Lang::_lang('eku_d213_ddirrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d213_ddirrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d213_ddirrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d213_ddirrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d213_ddirrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d213_ddirrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d213_ddirrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d213_ddirrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d213_ddirrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d213_ddirrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d213_ddirrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d213_ddirrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d213_ddirrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d218_dnumcasrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d218_dnumcasrec' ?>" >

                    <?php Lang::_lang('eku_d218_dnumcasrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d218_dnumcasrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d218_dnumcasrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d218_dnumcasrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d218_dnumcasrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d218_dnumcasrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD218Dnumcasrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d218_dnumcasrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d218_dnumcasrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d218_dnumcasrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d218_dnumcasrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d218_dnumcasrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d218_dnumcasrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d218_dnumcasrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d219_cdeprec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d219_cdeprec' ?>" >

                    <?php Lang::_lang('eku_d219_cdeprec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d219_cdeprec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d219_cdeprec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d219_cdeprec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d219_cdeprec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d219_cdeprec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD219Cdeprec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d219_cdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d219_cdeprec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d219_cdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d219_cdeprec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d219_cdeprec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d219_cdeprec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d219_cdeprec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d220_ddesdeprec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d220_ddesdeprec' ?>" >

                    <?php Lang::_lang('eku_d220_ddesdeprec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d220_ddesdeprec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d220_ddesdeprec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d220_ddesdeprec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d220_ddesdeprec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d220_ddesdeprec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD220Ddesdeprec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d220_ddesdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d220_ddesdeprec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d220_ddesdeprec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d220_ddesdeprec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d220_ddesdeprec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d220_ddesdeprec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d220_ddesdeprec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d221_cdisrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d221_cdisrec' ?>" >

                    <?php Lang::_lang('eku_d221_cdisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d221_cdisrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d221_cdisrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d221_cdisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d221_cdisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d221_cdisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD221Cdisrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d221_cdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d221_cdisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d221_cdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d221_cdisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d221_cdisrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d221_cdisrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d221_cdisrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d222_ddesdisrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d222_ddesdisrec' ?>" >

                    <?php Lang::_lang('eku_d222_ddesdisrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d222_ddesdisrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d222_ddesdisrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d222_ddesdisrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d222_ddesdisrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d222_ddesdisrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD222Ddesdisrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d222_ddesdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d222_ddesdisrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d222_ddesdisrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d222_ddesdisrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d222_ddesdisrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d222_ddesdisrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d222_ddesdisrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d223_cciurec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d223_cciurec' ?>" >

                    <?php Lang::_lang('eku_d223_cciurec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d223_cciurec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d223_cciurec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d223_cciurec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d223_cciurec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d223_cciurec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD223Cciurec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d223_cciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d223_cciurec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d223_cciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d223_cciurec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d223_cciurec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d223_cciurec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d223_cciurec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d224_ddesciurec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d224_ddesciurec' ?>" >

                    <?php Lang::_lang('eku_d224_ddesciurec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d224_ddesciurec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d224_ddesciurec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d224_ddesciurec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d224_ddesciurec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d224_ddesciurec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD224Ddesciurec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d224_ddesciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d224_ddesciurec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d224_ddesciurec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d224_ddesciurec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d224_ddesciurec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d224_ddesciurec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d224_ddesciurec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d214_dtelrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d214_dtelrec' ?>" >

                    <?php Lang::_lang('eku_d214_dtelrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d214_dtelrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d214_dtelrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d214_dtelrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d214_dtelrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d214_dtelrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d214_dtelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d214_dtelrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d214_dtelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d214_dtelrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d214_dtelrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d214_dtelrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d214_dtelrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d215_dcelrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d215_dcelrec' ?>" >

                    <?php Lang::_lang('eku_d215_dcelrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d215_dcelrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d215_dcelrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d215_dcelrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d215_dcelrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d215_dcelrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD215Dcelrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d215_dcelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d215_dcelrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d215_dcelrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d215_dcelrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d215_dcelrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d215_dcelrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d215_dcelrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d216_demailrec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d216_demailrec' ?>" >

                    <?php Lang::_lang('eku_d216_demailrec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d216_demailrec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d216_demailrec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d216_demailrec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d216_demailrec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d216_demailrec' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d216_demailrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d216_demailrec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d216_demailrec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d216_demailrec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d216_demailrec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d216_demailrec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d216_demailrec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_d217_dcodcliente" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_d217_dcodcliente' ?>" >

                    <?php Lang::_lang('eku_d217_dcodcliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=eku_d217_dcodcliente' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_d217_dcodcliente" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_d217_dcodcliente')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_d217_dcodcliente' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_d217_dcodcliente' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD217Dcodcliente()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_d217_dcodcliente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_d217_dcodcliente', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d217_dcodcliente', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_d217_dcodcliente', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_d217_dcodcliente')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d217_dcodcliente_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_eku_d217_dcodcliente_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_d200_g_dat_gral_ope_g_dat_rec_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeD200GDatGralOpeGDatRec::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeD200GDatGralOpeGDatRec::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) != ''){ ?>
    <div class="alta relaciones">
		
    </div>
	<?php } ?>


	  
	  </div>

        </form>
    </div>

    <div id='pie'>
        <?php include 'parciales/pie.php' ?>
    </div>

    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>

