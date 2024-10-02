<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_f001_g_tot_sub';
$db_nombre_pagina = 'eku_de_f001_g_tot_sub_alta';


$eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
    // if(trim($hdn_id) != '') $eku_de_f001_g_tot_sub->setId($hdn_id, false);

    $eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($hdn_id);
    if(!$eku_de_f001_g_tot_sub){
        $eku_de_f001_g_tot_sub = new EkuDeF001GTotSub();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_f001_g_tot_sub){
            if(EkuDeF001GTotSub::GEN_CONTROL_ALCANCE){
                if($eku_de_f001_g_tot_sub->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeF001GTotSub&id='.$eku_de_f001_g_tot_sub->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA')){ 
	$eku_de_f001_g_tot_sub->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_f001_g_tot_sub->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_f001_g_tot_sub->setEkuF002Dsubexe(Gral::getVars(1, "txt_eku_f002_dsubexe"));
	$eku_de_f001_g_tot_sub->setEkuF003Dsubexo(Gral::getVars(1, "txt_eku_f003_dsubexo"));
	$eku_de_f001_g_tot_sub->setEkuF004Dsub5(Gral::getVars(1, "txt_eku_f004_dsub5"));
	$eku_de_f001_g_tot_sub->setEkuF005Dsub10(Gral::getVars(1, "txt_eku_f005_dsub10"));
	$eku_de_f001_g_tot_sub->setEkuF008Dtotope(Gral::getVars(1, "txt_eku_f008_dtotope"));
	$eku_de_f001_g_tot_sub->setEkuF009Dtotdesc(Gral::getVars(1, "txt_eku_f009_dtotdesc"));
	$eku_de_f001_g_tot_sub->setEkuF033Dtotdescglotem(Gral::getVars(1, "txt_eku_f033_dtotdescglotem"));
	$eku_de_f001_g_tot_sub->setEkuF034Dtotantitem(Gral::getVars(1, "txt_eku_f034_dtotantitem"));
	$eku_de_f001_g_tot_sub->setEkuF035Dtotant(Gral::getVars(1, "txt_eku_f035_dtotant"));
	$eku_de_f001_g_tot_sub->setEkuF010Dporcdesctotal(Gral::getVars(1, "txt_eku_f010_dporcdesctotal"));
	$eku_de_f001_g_tot_sub->setEkuF011Ddesctotal(Gral::getVars(1, "txt_eku_f011_ddesctotal"));
	$eku_de_f001_g_tot_sub->setEkuF012Danticipo(Gral::getVars(1, "txt_eku_f012_danticipo"));
	$eku_de_f001_g_tot_sub->setEkuF013Dredon(Gral::getVars(1, "txt_eku_f013_dredon"));
	$eku_de_f001_g_tot_sub->setEkuF025Dcomi(Gral::getVars(1, "txt_eku_f025_dcomi"));
	$eku_de_f001_g_tot_sub->setEkuF014Dtotgralope(Gral::getVars(1, "txt_eku_f014_dtotgralope"));
	$eku_de_f001_g_tot_sub->setEkuF015Diva5(Gral::getVars(1, "txt_eku_f015_diva5"));
	$eku_de_f001_g_tot_sub->setEkuF016Diva10(Gral::getVars(1, "txt_eku_f016_diva10"));
	$eku_de_f001_g_tot_sub->setEkuF036Dliqtotiva5(Gral::getVars(1, "txt_eku_f036_dliqtotiva5"));
	$eku_de_f001_g_tot_sub->setEkuF037Dliqtotiva10(Gral::getVars(1, "txt_eku_f037_dliqtotiva10"));
	$eku_de_f001_g_tot_sub->setEkuF026Divacomi(Gral::getVars(1, "txt_eku_f026_divacomi"));
	$eku_de_f001_g_tot_sub->setEkuF017Dtotiva(Gral::getVars(1, "txt_eku_f017_dtotiva"));
	$eku_de_f001_g_tot_sub->setEkuF018Dbasegrav5(Gral::getVars(1, "txt_eku_f018_dbasegrav5"));
	$eku_de_f001_g_tot_sub->setEkuF019Dbasegrav10(Gral::getVars(1, "txt_eku_f019_dbasegrav10"));
	$eku_de_f001_g_tot_sub->setEkuF020Dtbasgraiva(Gral::getVars(1, "txt_eku_f020_dtbasgraiva"));
	$eku_de_f001_g_tot_sub->setEkuF023Dtotalgs(Gral::getVars(1, "txt_eku_f023_dtotalgs"));
	$eku_de_f001_g_tot_sub->setEkuF024Dtotcom(Gral::getVars(1, "txt_eku_f024_dtotcom"));
	$eku_de_f001_g_tot_sub->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_f001_g_tot_sub->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_f001_g_tot_sub->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_f001_g_tot_sub->control();
                if(!$error->getExisteError()){
                    $eku_de_f001_g_tot_sub->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_f001_g_tot_sub->getId().'&hash='.$eku_de_f001_g_tot_sub->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_f001_g_tot_sub->control();
                if(!$error->getExisteError()){
                    $eku_de_f001_g_tot_sub->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_f001_g_tot_sub->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_f001_g_tot_sub){
                if(EkuDeF001GTotSub::GEN_CONTROL_ALCANCE){
                    if($eku_de_f001_g_tot_sub->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeF001GTotSub&id='.$eku_de_f001_g_tot_sub->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_f001_g_tot_sub' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeF001GTotSubs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeF001GTotSub::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeF001GTotSub::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_f001_g_tot_sub'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_f001_g_tot_sub->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_f001_g_tot_sub->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f002_dsubexe" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f002_dsubexe' ?>" >

                    <?php Lang::_lang('eku_f002_dsubexe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f002_dsubexe' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f002_dsubexe" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f002_dsubexe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f002_dsubexe' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f002_dsubexe' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF002Dsubexe()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f002_dsubexe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f002_dsubexe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f002_dsubexe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f002_dsubexe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f002_dsubexe')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f002_dsubexe_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f002_dsubexe_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f003_dsubexo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f003_dsubexo' ?>" >

                    <?php Lang::_lang('eku_f003_dsubexo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f003_dsubexo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f003_dsubexo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f003_dsubexo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f003_dsubexo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f003_dsubexo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF003Dsubexo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f003_dsubexo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f003_dsubexo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f003_dsubexo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f003_dsubexo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f003_dsubexo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f003_dsubexo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f003_dsubexo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f004_dsub5" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f004_dsub5' ?>" >

                    <?php Lang::_lang('eku_f004_dsub5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f004_dsub5' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f004_dsub5" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f004_dsub5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f004_dsub5' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f004_dsub5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF004Dsub5()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f004_dsub5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f004_dsub5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f004_dsub5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f004_dsub5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f004_dsub5')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f004_dsub5_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f004_dsub5_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f005_dsub10" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f005_dsub10' ?>" >

                    <?php Lang::_lang('eku_f005_dsub10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f005_dsub10' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f005_dsub10" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f005_dsub10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f005_dsub10' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f005_dsub10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF005Dsub10()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f005_dsub10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f005_dsub10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f005_dsub10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f005_dsub10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f005_dsub10')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f005_dsub10_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f005_dsub10_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f008_dtotope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f008_dtotope' ?>" >

                    <?php Lang::_lang('eku_f008_dtotope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f008_dtotope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f008_dtotope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f008_dtotope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f008_dtotope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f008_dtotope' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF008Dtotope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f008_dtotope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f008_dtotope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f008_dtotope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f008_dtotope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f008_dtotope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f008_dtotope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f008_dtotope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f009_dtotdesc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f009_dtotdesc' ?>" >

                    <?php Lang::_lang('eku_f009_dtotdesc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f009_dtotdesc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f009_dtotdesc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f009_dtotdesc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f009_dtotdesc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f009_dtotdesc' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF009Dtotdesc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f009_dtotdesc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f009_dtotdesc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f009_dtotdesc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f009_dtotdesc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f009_dtotdesc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f009_dtotdesc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f009_dtotdesc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f033_dtotdescglotem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem' ?>" >

                    <?php Lang::_lang('eku_f033_dtotdescglotem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f033_dtotdescglotem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f033_dtotdescglotem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f033_dtotdescglotem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f033_dtotdescglotem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f033_dtotdescglotem' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF033Dtotdescglotem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f033_dtotdescglotem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f033_dtotdescglotem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f033_dtotdescglotem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f033_dtotdescglotem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f034_dtotantitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f034_dtotantitem' ?>" >

                    <?php Lang::_lang('eku_f034_dtotantitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f034_dtotantitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f034_dtotantitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f034_dtotantitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f034_dtotantitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f034_dtotantitem' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF034Dtotantitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f034_dtotantitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f034_dtotantitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f034_dtotantitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f034_dtotantitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f034_dtotantitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f034_dtotantitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f034_dtotantitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f035_dtotant" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f035_dtotant' ?>" >

                    <?php Lang::_lang('eku_f035_dtotant', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f035_dtotant' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f035_dtotant" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f035_dtotant')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f035_dtotant' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f035_dtotant' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF035Dtotant()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f035_dtotant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f035_dtotant', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f035_dtotant', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f035_dtotant', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f035_dtotant')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f035_dtotant_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f035_dtotant_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f010_dporcdesctotal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal' ?>" >

                    <?php Lang::_lang('eku_f010_dporcdesctotal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f010_dporcdesctotal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f010_dporcdesctotal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f010_dporcdesctotal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f010_dporcdesctotal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f010_dporcdesctotal' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF010Dporcdesctotal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f010_dporcdesctotal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f010_dporcdesctotal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f010_dporcdesctotal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f010_dporcdesctotal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f011_ddesctotal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f011_ddesctotal' ?>" >

                    <?php Lang::_lang('eku_f011_ddesctotal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f011_ddesctotal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f011_ddesctotal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f011_ddesctotal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f011_ddesctotal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f011_ddesctotal' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF011Ddesctotal()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f011_ddesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f011_ddesctotal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f011_ddesctotal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f011_ddesctotal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f011_ddesctotal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f011_ddesctotal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f011_ddesctotal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f012_danticipo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f012_danticipo' ?>" >

                    <?php Lang::_lang('eku_f012_danticipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f012_danticipo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f012_danticipo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f012_danticipo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f012_danticipo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f012_danticipo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF012Danticipo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f012_danticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f012_danticipo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f012_danticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f012_danticipo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f012_danticipo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f012_danticipo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f012_danticipo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f013_dredon" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f013_dredon' ?>" >

                    <?php Lang::_lang('eku_f013_dredon', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f013_dredon' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f013_dredon" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f013_dredon')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f013_dredon' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f013_dredon' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF013Dredon()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f013_dredon', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f013_dredon', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f013_dredon', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f013_dredon', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f013_dredon')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f013_dredon_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f013_dredon_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f025_dcomi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f025_dcomi' ?>" >

                    <?php Lang::_lang('eku_f025_dcomi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f025_dcomi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f025_dcomi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f025_dcomi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f025_dcomi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f025_dcomi' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF025Dcomi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f025_dcomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f025_dcomi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f025_dcomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f025_dcomi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f025_dcomi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f025_dcomi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f025_dcomi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f014_dtotgralope" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f014_dtotgralope' ?>" >

                    <?php Lang::_lang('eku_f014_dtotgralope', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f014_dtotgralope' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f014_dtotgralope" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f014_dtotgralope')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f014_dtotgralope' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f014_dtotgralope' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF014Dtotgralope()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f014_dtotgralope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f014_dtotgralope', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f014_dtotgralope', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f014_dtotgralope', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f014_dtotgralope')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f014_dtotgralope_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f014_dtotgralope_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f015_diva5" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f015_diva5' ?>" >

                    <?php Lang::_lang('eku_f015_diva5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f015_diva5' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f015_diva5" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f015_diva5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f015_diva5' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f015_diva5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF015Diva5()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f015_diva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f015_diva5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f015_diva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f015_diva5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f015_diva5')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f015_diva5_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f015_diva5_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f016_diva10" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f016_diva10' ?>" >

                    <?php Lang::_lang('eku_f016_diva10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f016_diva10' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f016_diva10" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f016_diva10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f016_diva10' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f016_diva10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF016Diva10()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f016_diva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f016_diva10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f016_diva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f016_diva10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f016_diva10')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f016_diva10_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f016_diva10_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f036_dliqtotiva5" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5' ?>" >

                    <?php Lang::_lang('eku_f036_dliqtotiva5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f036_dliqtotiva5' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f036_dliqtotiva5" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f036_dliqtotiva5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f036_dliqtotiva5' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f036_dliqtotiva5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF036Dliqtotiva5()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f036_dliqtotiva5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f036_dliqtotiva5')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f036_dliqtotiva5_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f036_dliqtotiva5_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f037_dliqtotiva10" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10' ?>" >

                    <?php Lang::_lang('eku_f037_dliqtotiva10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f037_dliqtotiva10' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f037_dliqtotiva10" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f037_dliqtotiva10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f037_dliqtotiva10' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f037_dliqtotiva10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF037Dliqtotiva10()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f037_dliqtotiva10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f037_dliqtotiva10')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f037_dliqtotiva10_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f037_dliqtotiva10_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f026_divacomi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f026_divacomi' ?>" >

                    <?php Lang::_lang('eku_f026_divacomi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f026_divacomi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f026_divacomi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f026_divacomi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f026_divacomi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f026_divacomi' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF026Divacomi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f026_divacomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f026_divacomi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f026_divacomi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f026_divacomi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f026_divacomi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f026_divacomi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f026_divacomi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f017_dtotiva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f017_dtotiva' ?>" >

                    <?php Lang::_lang('eku_f017_dtotiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f017_dtotiva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f017_dtotiva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f017_dtotiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f017_dtotiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f017_dtotiva' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF017Dtotiva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f017_dtotiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f017_dtotiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f017_dtotiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f017_dtotiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f017_dtotiva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f017_dtotiva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f017_dtotiva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f018_dbasegrav5" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f018_dbasegrav5' ?>" >

                    <?php Lang::_lang('eku_f018_dbasegrav5', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f018_dbasegrav5' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f018_dbasegrav5" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f018_dbasegrav5')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f018_dbasegrav5' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f018_dbasegrav5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF018Dbasegrav5()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f018_dbasegrav5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f018_dbasegrav5', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f018_dbasegrav5', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f018_dbasegrav5', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f018_dbasegrav5')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f018_dbasegrav5_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f018_dbasegrav5_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f019_dbasegrav10" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f019_dbasegrav10' ?>" >

                    <?php Lang::_lang('eku_f019_dbasegrav10', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f019_dbasegrav10' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f019_dbasegrav10" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f019_dbasegrav10')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f019_dbasegrav10' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f019_dbasegrav10' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF019Dbasegrav10()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f019_dbasegrav10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f019_dbasegrav10', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f019_dbasegrav10', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f019_dbasegrav10', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f019_dbasegrav10')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f019_dbasegrav10_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f019_dbasegrav10_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f020_dtbasgraiva" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva' ?>" >

                    <?php Lang::_lang('eku_f020_dtbasgraiva', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f020_dtbasgraiva' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f020_dtbasgraiva" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f020_dtbasgraiva')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f020_dtbasgraiva' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f020_dtbasgraiva' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF020Dtbasgraiva()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f020_dtbasgraiva', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f020_dtbasgraiva')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f020_dtbasgraiva_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f020_dtbasgraiva_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f023_dtotalgs" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f023_dtotalgs' ?>" >

                    <?php Lang::_lang('eku_f023_dtotalgs', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f023_dtotalgs' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f023_dtotalgs" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f023_dtotalgs')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f023_dtotalgs' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f023_dtotalgs' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF023Dtotalgs()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f023_dtotalgs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f023_dtotalgs', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f023_dtotalgs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f023_dtotalgs', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f023_dtotalgs')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f023_dtotalgs_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f023_dtotalgs_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_f024_dtotcom" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_f024_dtotcom' ?>" >

                    <?php Lang::_lang('eku_f024_dtotcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=eku_f024_dtotcom' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_f024_dtotcom" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_f024_dtotcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_f024_dtotcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_f024_dtotcom' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getEkuF024Dtotcom()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_f024_dtotcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_f024_dtotcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f024_dtotcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_f024_dtotcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_f024_dtotcom')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f024_dtotcom_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_eku_f024_dtotcom_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_f001_g_tot_sub_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_f001_g_tot_sub->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeF001GTotSub::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeF001GTotSub::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_f001_g_tot_sub->getId()) != ''){ ?>
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

