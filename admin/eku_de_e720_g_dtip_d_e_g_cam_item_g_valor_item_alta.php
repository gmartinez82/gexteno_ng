<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item';
$db_nombre_pagina = 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta';


$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
    // if(trim($hdn_id) != '') $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setId($hdn_id, false);

    $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($hdn_id);
    if(!$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){
        $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = new EkuDeE720GDtipDEGCamItemGValorItem();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){
            if(EkuDeE720GDtipDEGCamItemGValorItem::GEN_CONTROL_ALCANCE){
                if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE720GDtipDEGCamItemGValorItem&id='.$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA')){ 
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser(Gral::getVars(1, "txt_eku_e721_dpuniproser"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit(Gral::getVars(1, "txt_eku_e725_dticamit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem(Gral::getVars(1, "txt_eku_e727_dtotbruopeitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem(Gral::getVars(1, "txt_eku_ea002_ddescitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit(Gral::getVars(1, "txt_eku_ea003_dporcdesit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem(Gral::getVars(1, "txt_eku_ea004_ddescgloitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit(Gral::getVars(1, "txt_eku_ea006_dantpreuniit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit(Gral::getVars(1, "txt_eku_ea007_dantglopreuniit"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem(Gral::getVars(1, "txt_eku_ea008_dtotopeitem"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs(Gral::getVars(1, "txt_eku_ea009_dtotopegs"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->control();
                if(!$error->getExisteError()){
                    $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId().'&hash='.$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->control();
                if(!$error->getExisteError()){
                    $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){
                if(EkuDeE720GDtipDEGCamItemGValorItem::GEN_CONTROL_ALCANCE){
                    if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE720GDtipDEGCamItemGValorItem&id='.$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE721Dpuniproser(Gral::getVars(2, "eku_e721_dpuniproser", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE725Dticamit(Gral::getVars(2, "eku_e725_dticamit", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuE727Dtotbruopeitem(Gral::getVars(2, "eku_e727_dtotbruopeitem", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa002Ddescitem(Gral::getVars(2, "eku_ea002_ddescitem", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa003Dporcdesit(Gral::getVars(2, "eku_ea003_dporcdesit", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa004Ddescgloitem(Gral::getVars(2, "eku_ea004_ddescgloitem", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa006Dantpreuniit(Gral::getVars(2, "eku_ea006_dantpreuniit", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa007Dantglopreuniit(Gral::getVars(2, "eku_ea007_dantglopreuniit", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa008Dtotopeitem(Gral::getVars(2, "eku_ea008_dtotopeitem", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEkuEa009Dtotopegs(Gral::getVars(2, "eku_ea009_dtotopegs", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItems') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE720GDtipDEGCamItemGValorItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE720GDtipDEGCamItemGValorItem::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >

                    <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_de_e700_g_dtip_d_e_g_cam_item_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(true), '...'), $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItemId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e721_dpuniproser" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e721_dpuniproser' ?>" >

                    <?php Lang::_lang('eku_e721_dpuniproser', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_e721_dpuniproser' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e721_dpuniproser" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e721_dpuniproser')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e721_dpuniproser' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e721_dpuniproser' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e721_dpuniproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e721_dpuniproser', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e721_dpuniproser', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e721_dpuniproser', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e721_dpuniproser')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e721_dpuniproser_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e721_dpuniproser_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e725_dticamit" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e725_dticamit' ?>" >

                    <?php Lang::_lang('eku_e725_dticamit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_e725_dticamit' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e725_dticamit" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e725_dticamit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e725_dticamit' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e725_dticamit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE725Dticamit()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e725_dticamit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e725_dticamit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e725_dticamit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e725_dticamit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e725_dticamit')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e725_dticamit_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e725_dticamit_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e727_dtotbruopeitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem' ?>" >

                    <?php Lang::_lang('eku_e727_dtotbruopeitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_e727_dtotbruopeitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e727_dtotbruopeitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e727_dtotbruopeitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e727_dtotbruopeitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e727_dtotbruopeitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE727Dtotbruopeitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e727_dtotbruopeitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e727_dtotbruopeitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e727_dtotbruopeitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_e727_dtotbruopeitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea002_ddescitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea002_ddescitem' ?>" >

                    <?php Lang::_lang('eku_ea002_ddescitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea002_ddescitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea002_ddescitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea002_ddescitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea002_ddescitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea002_ddescitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea002_ddescitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea002_ddescitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea002_ddescitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea002_ddescitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea002_ddescitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea002_ddescitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea002_ddescitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea003_dporcdesit" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea003_dporcdesit' ?>" >

                    <?php Lang::_lang('eku_ea003_dporcdesit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea003_dporcdesit' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea003_dporcdesit" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea003_dporcdesit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea003_dporcdesit' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea003_dporcdesit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa003Dporcdesit()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea003_dporcdesit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea003_dporcdesit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea003_dporcdesit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea003_dporcdesit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea003_dporcdesit')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea003_dporcdesit_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea003_dporcdesit_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea004_ddescgloitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem' ?>" >

                    <?php Lang::_lang('eku_ea004_ddescgloitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea004_ddescgloitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea004_ddescgloitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea004_ddescgloitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea004_ddescgloitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea004_ddescgloitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa004Ddescgloitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea004_ddescgloitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea004_ddescgloitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea004_ddescgloitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea004_ddescgloitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea006_dantpreuniit" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit' ?>" >

                    <?php Lang::_lang('eku_ea006_dantpreuniit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea006_dantpreuniit' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea006_dantpreuniit" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea006_dantpreuniit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea006_dantpreuniit' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea006_dantpreuniit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa006Dantpreuniit()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea006_dantpreuniit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea006_dantpreuniit')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea006_dantpreuniit_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea006_dantpreuniit_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea007_dantglopreuniit" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit' ?>" >

                    <?php Lang::_lang('eku_ea007_dantglopreuniit', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea007_dantglopreuniit' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea007_dantglopreuniit" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea007_dantglopreuniit')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea007_dantglopreuniit' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea007_dantglopreuniit' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa007Dantglopreuniit()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea007_dantglopreuniit', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea007_dantglopreuniit')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea007_dantglopreuniit_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea007_dantglopreuniit_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea008_dtotopeitem" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem' ?>" >

                    <?php Lang::_lang('eku_ea008_dtotopeitem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea008_dtotopeitem' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea008_dtotopeitem" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea008_dtotopeitem')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea008_dtotopeitem' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea008_dtotopeitem' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea008_dtotopeitem', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea008_dtotopeitem')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea008_dtotopeitem_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea008_dtotopeitem_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_ea009_dtotopegs" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_ea009_dtotopegs' ?>" >

                    <?php Lang::_lang('eku_ea009_dtotopegs', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=eku_ea009_dtotopegs' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_ea009_dtotopegs" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_ea009_dtotopegs')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_ea009_dtotopegs' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_ea009_dtotopegs' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa009Dtotopegs()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea009_dtotopegs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_ea009_dtotopegs', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea009_dtotopegs', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_ea009_dtotopegs', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_ea009_dtotopegs')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea009_dtotopegs_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_eku_ea009_dtotopegs_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE720GDtipDEGCamItemGValorItem::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE720GDtipDEGCamItemGValorItem::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) != ''){ ?>
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

