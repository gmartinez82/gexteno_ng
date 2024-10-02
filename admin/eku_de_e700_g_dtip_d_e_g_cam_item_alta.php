<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e700_g_dtip_d_e_g_cam_item';
$db_nombre_pagina = 'eku_de_e700_g_dtip_d_e_g_cam_item_alta';


$eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
    // if(trim($hdn_id) != '') $eku_de_e700_g_dtip_d_e_g_cam_item->setId($hdn_id, false);

    $eku_de_e700_g_dtip_d_e_g_cam_item = EkuDeE700GDtipDEGCamItem::getOxId($hdn_id);
    if(!$eku_de_e700_g_dtip_d_e_g_cam_item){
        $eku_de_e700_g_dtip_d_e_g_cam_item = new EkuDeE700GDtipDEGCamItem();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e700_g_dtip_d_e_g_cam_item){
            if(EkuDeE700GDtipDEGCamItem::GEN_CONTROL_ALCANCE){
                if($eku_de_e700_g_dtip_d_e_g_cam_item->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE700GDtipDEGCamItem&id='.$eku_de_e700_g_dtip_d_e_g_cam_item->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA')){ 
	$eku_de_e700_g_dtip_d_e_g_cam_item->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint(Gral::getVars(1, "txt_eku_e701_dcodint"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc(Gral::getVars(1, "txt_eku_e702_dpararanc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm(Gral::getVars(1, "txt_eku_e703_dncm"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg(Gral::getVars(1, "txt_eku_e704_ddncpg"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe(Gral::getVars(1, "txt_eku_e705_ddncpe"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin(Gral::getVars(1, "txt_eku_e706_dgtin"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq(Gral::getVars(1, "txt_eku_e707_dgtinpq"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser(Gral::getVars(1, "txt_eku_e708_ddesproser"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed(Gral::getVars(1, "txt_eku_e709_cunimed"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed(Gral::getVars(1, "txt_eku_e710_ddesunimed"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser(Gral::getVars(1, "txt_eku_e711_dcantproser"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig(Gral::getVars(1, "txt_eku_e712_cpaisorig"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig(Gral::getVars(1, "txt_eku_e713_ddespaisorig"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem(Gral::getVars(1, "txt_eku_e714_dinfitem"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc(Gral::getVars(1, "txt_eku_e715_crelmerc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc(Gral::getVars(1, "txt_eku_e716_ddesrelmerc"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer(Gral::getVars(1, "txt_eku_e717_dcanquimer"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer(Gral::getVars(1, "txt_eku_e718_dporquimer"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo(Gral::getVars(1, "txt_eku_e719_dcdcanticipo"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e700_g_dtip_d_e_g_cam_item->control();
                if(!$error->getExisteError()){
                    $eku_de_e700_g_dtip_d_e_g_cam_item->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e700_g_dtip_d_e_g_cam_item->getId().'&hash='.$eku_de_e700_g_dtip_d_e_g_cam_item->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e700_g_dtip_d_e_g_cam_item->control();
                if(!$error->getExisteError()){
                    $eku_de_e700_g_dtip_d_e_g_cam_item->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e700_g_dtip_d_e_g_cam_item->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e700_g_dtip_d_e_g_cam_item){
                if(EkuDeE700GDtipDEGCamItem::GEN_CONTROL_ALCANCE){
                    if($eku_de_e700_g_dtip_d_e_g_cam_item->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE700GDtipDEGCamItem&id='.$eku_de_e700_g_dtip_d_e_g_cam_item->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e700_g_dtip_d_e_g_cam_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE701Dcodint(Gral::getVars(2, "eku_e701_dcodint", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE702Dpararanc(Gral::getVars(2, "eku_e702_dpararanc", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE703Dncm(Gral::getVars(2, "eku_e703_dncm", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE704Ddncpg(Gral::getVars(2, "eku_e704_ddncpg", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE705Ddncpe(Gral::getVars(2, "eku_e705_ddncpe", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE706Dgtin(Gral::getVars(2, "eku_e706_dgtin", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE707Dgtinpq(Gral::getVars(2, "eku_e707_dgtinpq", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE708Ddesproser(Gral::getVars(2, "eku_e708_ddesproser", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE709Cunimed(Gral::getVars(2, "eku_e709_cunimed", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE710Ddesunimed(Gral::getVars(2, "eku_e710_ddesunimed", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE711Dcantproser(Gral::getVars(2, "eku_e711_dcantproser", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE712Cpaisorig(Gral::getVars(2, "eku_e712_cpaisorig", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE713Ddespaisorig(Gral::getVars(2, "eku_e713_ddespaisorig", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE714Dinfitem(Gral::getVars(2, "eku_e714_dinfitem", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE715Crelmerc(Gral::getVars(2, "eku_e715_crelmerc", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE716Ddesrelmerc(Gral::getVars(2, "eku_e716_ddesrelmerc", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE717Dcanquimer(Gral::getVars(2, "eku_e717_dcanquimer", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE718Dporquimer(Gral::getVars(2, "eku_e718_dporquimer", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEkuE719Dcdcanticipo(Gral::getVars(2, "eku_e719_dcdcanticipo", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e700_g_dtip_d_e_g_cam_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e700_g_dtip_d_e_g_cam_item' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE700GDtipDEGCamItems') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE700GDtipDEGCamItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE700GDtipDEGCamItem::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e700_g_dtip_d_e_g_cam_item'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e701_dcodint" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e701_dcodint' ?>" >

                    <?php Lang::_lang('eku_e701_dcodint', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e701_dcodint' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e701_dcodint" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e701_dcodint')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e701_dcodint' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e701_dcodint' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e701_dcodint', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e701_dcodint', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e701_dcodint', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e701_dcodint', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e701_dcodint')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e701_dcodint_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e701_dcodint_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e702_dpararanc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e702_dpararanc' ?>" >

                    <?php Lang::_lang('eku_e702_dpararanc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e702_dpararanc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e702_dpararanc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e702_dpararanc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e702_dpararanc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e702_dpararanc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE702Dpararanc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e702_dpararanc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e702_dpararanc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e702_dpararanc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e702_dpararanc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e702_dpararanc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e702_dpararanc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e702_dpararanc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e703_dncm" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e703_dncm' ?>" >

                    <?php Lang::_lang('eku_e703_dncm', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e703_dncm' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e703_dncm" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e703_dncm')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e703_dncm' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e703_dncm' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE703Dncm()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e703_dncm', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e703_dncm', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e703_dncm', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e703_dncm', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e703_dncm')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e703_dncm_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e703_dncm_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e704_ddncpg" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e704_ddncpg' ?>" >

                    <?php Lang::_lang('eku_e704_ddncpg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e704_ddncpg' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e704_ddncpg" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e704_ddncpg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e704_ddncpg' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e704_ddncpg' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE704Ddncpg()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e704_ddncpg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e704_ddncpg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e704_ddncpg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e704_ddncpg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e704_ddncpg')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e704_ddncpg_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e704_ddncpg_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e705_ddncpe" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e705_ddncpe' ?>" >

                    <?php Lang::_lang('eku_e705_ddncpe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e705_ddncpe' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e705_ddncpe" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e705_ddncpe')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e705_ddncpe' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e705_ddncpe' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE705Ddncpe()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e705_ddncpe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e705_ddncpe', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e705_ddncpe', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e705_ddncpe', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e705_ddncpe')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e705_ddncpe_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e705_ddncpe_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e706_dgtin" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e706_dgtin' ?>" >

                    <?php Lang::_lang('eku_e706_dgtin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e706_dgtin' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e706_dgtin" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e706_dgtin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e706_dgtin' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e706_dgtin' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE706Dgtin()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e706_dgtin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e706_dgtin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e706_dgtin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e706_dgtin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e706_dgtin')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e706_dgtin_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e706_dgtin_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e707_dgtinpq" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e707_dgtinpq' ?>" >

                    <?php Lang::_lang('eku_e707_dgtinpq', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e707_dgtinpq' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e707_dgtinpq" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e707_dgtinpq')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e707_dgtinpq' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e707_dgtinpq' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE707Dgtinpq()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e707_dgtinpq', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e707_dgtinpq', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e707_dgtinpq', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e707_dgtinpq', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e707_dgtinpq')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e707_dgtinpq_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e707_dgtinpq_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e708_ddesproser" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e708_ddesproser' ?>" >

                    <?php Lang::_lang('eku_e708_ddesproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e708_ddesproser' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e708_ddesproser" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e708_ddesproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e708_ddesproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e708_ddesproser' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e708_ddesproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e708_ddesproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e708_ddesproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e708_ddesproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e708_ddesproser')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e708_ddesproser_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e708_ddesproser_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e709_cunimed" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e709_cunimed' ?>" >

                    <?php Lang::_lang('eku_e709_cunimed', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e709_cunimed' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e709_cunimed" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e709_cunimed')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e709_cunimed' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e709_cunimed' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE709Cunimed()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e709_cunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e709_cunimed', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e709_cunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e709_cunimed', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e709_cunimed')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e709_cunimed_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e709_cunimed_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e710_ddesunimed" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e710_ddesunimed' ?>" >

                    <?php Lang::_lang('eku_e710_ddesunimed', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e710_ddesunimed' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e710_ddesunimed" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e710_ddesunimed')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e710_ddesunimed' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e710_ddesunimed' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e710_ddesunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e710_ddesunimed', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e710_ddesunimed', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e710_ddesunimed', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e710_ddesunimed')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e710_ddesunimed_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e710_ddesunimed_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e711_dcantproser" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e711_dcantproser' ?>" >

                    <?php Lang::_lang('eku_e711_dcantproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e711_dcantproser' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e711_dcantproser" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e711_dcantproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e711_dcantproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e711_dcantproser' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e711_dcantproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e711_dcantproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e711_dcantproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e711_dcantproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e711_dcantproser')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e711_dcantproser_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e711_dcantproser_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e712_cpaisorig" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e712_cpaisorig' ?>" >

                    <?php Lang::_lang('eku_e712_cpaisorig', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e712_cpaisorig' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e712_cpaisorig" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e712_cpaisorig')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e712_cpaisorig' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e712_cpaisorig' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE712Cpaisorig()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e712_cpaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e712_cpaisorig', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e712_cpaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e712_cpaisorig', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e712_cpaisorig')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e712_cpaisorig_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e712_cpaisorig_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e713_ddespaisorig" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e713_ddespaisorig' ?>" >

                    <?php Lang::_lang('eku_e713_ddespaisorig', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e713_ddespaisorig' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e713_ddespaisorig" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e713_ddespaisorig')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e713_ddespaisorig' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e713_ddespaisorig' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE713Ddespaisorig()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e713_ddespaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e713_ddespaisorig', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e713_ddespaisorig', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e713_ddespaisorig', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e713_ddespaisorig')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e713_ddespaisorig_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e713_ddespaisorig_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e714_dinfitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e714_dinfitem' ?>" >

                    <?php Lang::_lang('eku_e714_dinfitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e714_dinfitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e714_dinfitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e714_dinfitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e714_dinfitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e714_dinfitem' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE714Dinfitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e714_dinfitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e714_dinfitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e714_dinfitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e714_dinfitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e714_dinfitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e714_dinfitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e714_dinfitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e715_crelmerc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e715_crelmerc' ?>" >

                    <?php Lang::_lang('eku_e715_crelmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e715_crelmerc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e715_crelmerc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e715_crelmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e715_crelmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e715_crelmerc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE715Crelmerc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e715_crelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e715_crelmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e715_crelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e715_crelmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e715_crelmerc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e715_crelmerc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e715_crelmerc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e716_ddesrelmerc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc' ?>" >

                    <?php Lang::_lang('eku_e716_ddesrelmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e716_ddesrelmerc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e716_ddesrelmerc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e716_ddesrelmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e716_ddesrelmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e716_ddesrelmerc' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE716Ddesrelmerc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e716_ddesrelmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e716_ddesrelmerc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e716_ddesrelmerc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e716_ddesrelmerc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e717_dcanquimer" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e717_dcanquimer' ?>" >

                    <?php Lang::_lang('eku_e717_dcanquimer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e717_dcanquimer' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e717_dcanquimer" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e717_dcanquimer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e717_dcanquimer' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e717_dcanquimer' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE717Dcanquimer()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e717_dcanquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e717_dcanquimer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e717_dcanquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e717_dcanquimer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e717_dcanquimer')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e717_dcanquimer_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e717_dcanquimer_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e718_dporquimer" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e718_dporquimer' ?>" >

                    <?php Lang::_lang('eku_e718_dporquimer', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e718_dporquimer' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e718_dporquimer" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e718_dporquimer')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e718_dporquimer' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e718_dporquimer' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE718Dporquimer()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e718_dporquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e718_dporquimer', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e718_dporquimer', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e718_dporquimer', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e718_dporquimer')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e718_dporquimer_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e718_dporquimer_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e719_dcdcanticipo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo' ?>" >

                    <?php Lang::_lang('eku_e719_dcdcanticipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=eku_e719_dcdcanticipo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e719_dcdcanticipo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e719_dcdcanticipo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e719_dcdcanticipo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e719_dcdcanticipo' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE719Dcdcanticipo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e719_dcdcanticipo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e719_dcdcanticipo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e719_dcdcanticipo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_eku_e719_dcdcanticipo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e700_g_dtip_d_e_g_cam_item_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e700_g_dtip_d_e_g_cam_item->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE700GDtipDEGCamItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE700GDtipDEGCamItem::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) != ''){ ?>
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

