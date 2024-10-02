<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc';
$db_nombre_pagina = 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta';


$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
    // if(trim($hdn_id) != '') $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setId($hdn_id, false);

    $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = EkuDeE750GDtipDEGCamItemGRasMerc::getOxId($hdn_id);
    if(!$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){
        $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = new EkuDeE750GDtipDEGCamItemGRasMerc();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){
            if(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_CONTROL_ALCANCE){
                if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE750GDtipDEGCamItemGRasMerc&id='.$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA')){ 
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE751Dnumlote(Gral::getVars(1, "txt_eku_e751_dnumlote"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE752Dvencmerc(Gral::getVars(1, "txt_eku_e752_dvencmerc"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE753Dnserie(Gral::getVars(1, "txt_eku_e753_dnserie"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE754Dnumpedi(Gral::getVars(1, "txt_eku_e754_dnumpedi"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE755Dnumsegui(Gral::getVars(1, "txt_eku_e755_dnumsegui"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE756Dnomimp(Gral::getVars(1, "txt_eku_e756_dnomimp"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE757Ddirimp(Gral::getVars(1, "txt_eku_e757_ddirimp"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE758Dnumfir(Gral::getVars(1, "txt_eku_e758_dnumfir"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE759Dnumreg(Gral::getVars(1, "txt_eku_e759_dnumreg"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE760Dnumregentcom(Gral::getVars(1, "txt_eku_e760_dnumregentcom"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->control();
                if(!$error->getExisteError()){
                    $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId().'&hash='.$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->control();
                if(!$error->getExisteError()){
                    $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){
                if(EkuDeE750GDtipDEGCamItemGRasMerc::GEN_CONTROL_ALCANCE){
                    if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE750GDtipDEGCamItemGRasMerc&id='.$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE751Dnumlote(Gral::getVars(2, "eku_e751_dnumlote", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE752Dvencmerc(Gral::getVars(2, "eku_e752_dvencmerc", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE753Dnserie(Gral::getVars(2, "eku_e753_dnserie", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE754Dnumpedi(Gral::getVars(2, "eku_e754_dnumpedi", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE755Dnumsegui(Gral::getVars(2, "eku_e755_dnumsegui", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE756Dnomimp(Gral::getVars(2, "eku_e756_dnomimp", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE757Ddirimp(Gral::getVars(2, "eku_e757_ddirimp", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE758Dnumfir(Gral::getVars(2, "eku_e758_dnumfir", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE759Dnumreg(Gral::getVars(2, "eku_e759_dnumreg", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEkuE760Dnumregentcom(Gral::getVars(2, "eku_e760_dnumregentcom", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMercs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE750GDtipDEGCamItemGRasMerc::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE750GDtipDEGCamItemGRasMerc::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >

                    <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_de_e700_g_dtip_d_e_g_cam_item_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(true), '...'), $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItemId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e751_dnumlote" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e751_dnumlote' ?>" >

                    <?php Lang::_lang('eku_e751_dnumlote', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e751_dnumlote' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e751_dnumlote" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e751_dnumlote')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e751_dnumlote' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e751_dnumlote' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e751_dnumlote', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e751_dnumlote', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e751_dnumlote', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e751_dnumlote', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e751_dnumlote')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e751_dnumlote_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e751_dnumlote_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e752_dvencmerc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e752_dvencmerc' ?>" >

                    <?php Lang::_lang('eku_e752_dvencmerc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e752_dvencmerc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e752_dvencmerc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e752_dvencmerc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e752_dvencmerc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e752_dvencmerc' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e752_dvencmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e752_dvencmerc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e752_dvencmerc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e752_dvencmerc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e752_dvencmerc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e752_dvencmerc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e752_dvencmerc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e753_dnserie" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e753_dnserie' ?>" >

                    <?php Lang::_lang('eku_e753_dnserie', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e753_dnserie' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e753_dnserie" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e753_dnserie')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e753_dnserie' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e753_dnserie' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e753_dnserie', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e753_dnserie', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e753_dnserie', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e753_dnserie', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e753_dnserie')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e753_dnserie_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e753_dnserie_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e754_dnumpedi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e754_dnumpedi' ?>" >

                    <?php Lang::_lang('eku_e754_dnumpedi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e754_dnumpedi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e754_dnumpedi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e754_dnumpedi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e754_dnumpedi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e754_dnumpedi' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e754_dnumpedi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e754_dnumpedi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e754_dnumpedi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e754_dnumpedi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e754_dnumpedi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e754_dnumpedi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e754_dnumpedi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e755_dnumsegui" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e755_dnumsegui' ?>" >

                    <?php Lang::_lang('eku_e755_dnumsegui', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e755_dnumsegui' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e755_dnumsegui" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e755_dnumsegui')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e755_dnumsegui' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e755_dnumsegui' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e755_dnumsegui', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e755_dnumsegui', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e755_dnumsegui', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e755_dnumsegui', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e755_dnumsegui')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e755_dnumsegui_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e755_dnumsegui_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e756_dnomimp" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e756_dnomimp' ?>" >

                    <?php Lang::_lang('eku_e756_dnomimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e756_dnomimp' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e756_dnomimp" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e756_dnomimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e756_dnomimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e756_dnomimp' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e756_dnomimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e756_dnomimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e756_dnomimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e756_dnomimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e756_dnomimp')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e756_dnomimp_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e756_dnomimp_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e757_ddirimp" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e757_ddirimp' ?>" >

                    <?php Lang::_lang('eku_e757_ddirimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e757_ddirimp' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e757_ddirimp" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e757_ddirimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e757_ddirimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e757_ddirimp' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e757_ddirimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e757_ddirimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e757_ddirimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e757_ddirimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e757_ddirimp')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e757_ddirimp_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e757_ddirimp_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e758_dnumfir" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e758_dnumfir' ?>" >

                    <?php Lang::_lang('eku_e758_dnumfir', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e758_dnumfir' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e758_dnumfir" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e758_dnumfir')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e758_dnumfir' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e758_dnumfir' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e758_dnumfir', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e758_dnumfir', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e758_dnumfir', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e758_dnumfir', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e758_dnumfir')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e758_dnumfir_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e758_dnumfir_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e759_dnumreg" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e759_dnumreg' ?>" >

                    <?php Lang::_lang('eku_e759_dnumreg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e759_dnumreg' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e759_dnumreg" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e759_dnumreg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e759_dnumreg' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e759_dnumreg' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e759_dnumreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e759_dnumreg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e759_dnumreg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e759_dnumreg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e759_dnumreg')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e759_dnumreg_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e759_dnumreg_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e760_dnumregentcom" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e760_dnumregentcom' ?>" >

                    <?php Lang::_lang('eku_e760_dnumregentcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=eku_e760_dnumregentcom' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e760_dnumregentcom" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e760_dnumregentcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e760_dnumregentcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e760_dnumregentcom' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e760_dnumregentcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e760_dnumregentcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e760_dnumregentcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e760_dnumregentcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e760_dnumregentcom')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e760_dnumregentcom_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_eku_e760_dnumregentcom_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE750GDtipDEGCamItemGRasMerc::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE750GDtipDEGCamItemGRasMerc::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) != ''){ ?>
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

