<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo';
$db_nombre_pagina = 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta';


$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
    // if(trim($hdn_id) != '') $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setId($hdn_id, false);

    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($hdn_id);
    if(!$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = new EkuDeE770GDtipDEGCamItemGVehNuevo();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
            if(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_CONTROL_ALCANCE){
                if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE770GDtipDEGCamItemGVehNuevo&id='.$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA')){ 
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(1, "cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id", null));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE771Itipopvn(Gral::getVars(1, "txt_eku_e771_itipopvn"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE772Ddestipopvn(Gral::getVars(1, "txt_eku_e772_ddestipopvn"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE773Dchasis(Gral::getVars(1, "txt_eku_e773_dchasis"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE774Dcolor(Gral::getVars(1, "txt_eku_e774_dcolor"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE775Dpotencia(Gral::getVars(1, "txt_eku_e775_dpotencia"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE776Dcapmot(Gral::getVars(1, "txt_eku_e776_dcapmot"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE777Dpnet(Gral::getVars(1, "txt_eku_e777_dpnet"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE778Dpbruto(Gral::getVars(1, "txt_eku_e778_dpbruto"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE779Itipcom(Gral::getVars(1, "txt_eku_e779_itipcom"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE780Ddestipcom(Gral::getVars(1, "txt_eku_e780_ddestipcom"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE781Dnromotor(Gral::getVars(1, "txt_eku_e781_dnromotor"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE782Dcaptracc(Gral::getVars(1, "txt_eku_e782_dcaptracc"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE783Danofab(Gral::getVars(1, "txt_eku_e783_danofab"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE784Ctipveh(Gral::getVars(1, "txt_eku_e784_ctipveh"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE785Dcapac(Gral::getVars(1, "txt_eku_e785_dcapac"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE786Dcilin(Gral::getVars(1, "txt_eku_e786_dcilin"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->control();
                if(!$error->getExisteError()){
                    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId().'&hash='.$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->control();
                if(!$error->getExisteError()){
                    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
                if(EkuDeE770GDtipDEGCamItemGVehNuevo::GEN_CONTROL_ALCANCE){
                    if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE770GDtipDEGCamItemGVehNuevo&id='.$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuDeE700GDtipDEGCamItemId(Gral::getVars(2, "eku_de_e700_g_dtip_d_e_g_cam_item_id", 'null'));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE771Itipopvn(Gral::getVars(2, "eku_e771_itipopvn", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE772Ddestipopvn(Gral::getVars(2, "eku_e772_ddestipopvn", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE773Dchasis(Gral::getVars(2, "eku_e773_dchasis", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE774Dcolor(Gral::getVars(2, "eku_e774_dcolor", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE775Dpotencia(Gral::getVars(2, "eku_e775_dpotencia", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE776Dcapmot(Gral::getVars(2, "eku_e776_dcapmot", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE777Dpnet(Gral::getVars(2, "eku_e777_dpnet", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE778Dpbruto(Gral::getVars(2, "eku_e778_dpbruto", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE779Itipcom(Gral::getVars(2, "eku_e779_itipcom", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE780Ddestipcom(Gral::getVars(2, "eku_e780_ddestipcom", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE781Dnromotor(Gral::getVars(2, "eku_e781_dnromotor", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE782Dcaptracc(Gral::getVars(2, "eku_e782_dcaptracc", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE783Danofab(Gral::getVars(2, "eku_e783_danofab", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE784Ctipveh(Gral::getVars(2, "eku_e784_ctipveh", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE785Dcapac(Gral::getVars(2, "eku_e785_dcapac", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEkuE786Dcilin(Gral::getVars(2, "eku_e786_dcilin", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE770GDtipDEGCamItemGVehNuevo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE770GDtipDEGCamItemGVehNuevo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id' ?>" >

                    <?php Lang::_lang('EkuDeE700GDtipDEGCamItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_de_e700_g_dtip_d_e_g_cam_item_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA_CMB_EDIT_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" <?php echo ($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItemId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id" clase_id="eku_de_e700_g_dtip_d_e_g_cam_item" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getCmbFiltro(EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsCmb(true), '...'), $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItemId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_e700_g_dtip_d_e_g_cam_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_e700_g_dtip_d_e_g_cam_item_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_de_e700_g_dtip_d_e_g_cam_item_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e771_itipopvn" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e771_itipopvn' ?>" >

                    <?php Lang::_lang('eku_e771_itipopvn', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e771_itipopvn' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e771_itipopvn" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e771_itipopvn')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e771_itipopvn' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e771_itipopvn' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE771Itipopvn()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e771_itipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e771_itipopvn', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e771_itipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e771_itipopvn', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e771_itipopvn')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e771_itipopvn_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e771_itipopvn_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e772_ddestipopvn" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e772_ddestipopvn' ?>" >

                    <?php Lang::_lang('eku_e772_ddestipopvn', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e772_ddestipopvn' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e772_ddestipopvn" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e772_ddestipopvn')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e772_ddestipopvn' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e772_ddestipopvn' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE772Ddestipopvn()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e772_ddestipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e772_ddestipopvn', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e772_ddestipopvn', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e772_ddestipopvn', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e772_ddestipopvn')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e772_ddestipopvn_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e772_ddestipopvn_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e773_dchasis" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e773_dchasis' ?>" >

                    <?php Lang::_lang('eku_e773_dchasis', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e773_dchasis' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e773_dchasis" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e773_dchasis')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e773_dchasis' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e773_dchasis' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE773Dchasis()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e773_dchasis', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e773_dchasis', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e773_dchasis', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e773_dchasis', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e773_dchasis')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e773_dchasis_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e773_dchasis_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e774_dcolor" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e774_dcolor' ?>" >

                    <?php Lang::_lang('eku_e774_dcolor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e774_dcolor' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e774_dcolor" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e774_dcolor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e774_dcolor' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e774_dcolor' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE774Dcolor()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e774_dcolor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e774_dcolor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e774_dcolor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e774_dcolor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e774_dcolor')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e774_dcolor_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e774_dcolor_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e775_dpotencia" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e775_dpotencia' ?>" >

                    <?php Lang::_lang('eku_e775_dpotencia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e775_dpotencia' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e775_dpotencia" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e775_dpotencia')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e775_dpotencia' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e775_dpotencia' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE775Dpotencia()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e775_dpotencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e775_dpotencia', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e775_dpotencia', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e775_dpotencia', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e775_dpotencia')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e775_dpotencia_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e775_dpotencia_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e776_dcapmot" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e776_dcapmot' ?>" >

                    <?php Lang::_lang('eku_e776_dcapmot', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e776_dcapmot' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e776_dcapmot" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e776_dcapmot')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e776_dcapmot' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e776_dcapmot' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE776Dcapmot()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e776_dcapmot', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e776_dcapmot', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e776_dcapmot', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e776_dcapmot', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e776_dcapmot')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e776_dcapmot_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e776_dcapmot_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e777_dpnet" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e777_dpnet' ?>" >

                    <?php Lang::_lang('eku_e777_dpnet', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e777_dpnet' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e777_dpnet" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e777_dpnet')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e777_dpnet' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e777_dpnet' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE777Dpnet()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e777_dpnet', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e777_dpnet', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e777_dpnet', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e777_dpnet', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e777_dpnet')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e777_dpnet_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e777_dpnet_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e778_dpbruto" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e778_dpbruto' ?>" >

                    <?php Lang::_lang('eku_e778_dpbruto', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e778_dpbruto' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e778_dpbruto" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e778_dpbruto')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e778_dpbruto' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e778_dpbruto' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE778Dpbruto()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e778_dpbruto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e778_dpbruto', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e778_dpbruto', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e778_dpbruto', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e778_dpbruto')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e778_dpbruto_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e778_dpbruto_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e779_itipcom" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e779_itipcom' ?>" >

                    <?php Lang::_lang('eku_e779_itipcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e779_itipcom' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e779_itipcom" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e779_itipcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e779_itipcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e779_itipcom' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE779Itipcom()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e779_itipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e779_itipcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e779_itipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e779_itipcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e779_itipcom')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e779_itipcom_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e779_itipcom_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e780_ddestipcom" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e780_ddestipcom' ?>" >

                    <?php Lang::_lang('eku_e780_ddestipcom', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e780_ddestipcom' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e780_ddestipcom" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e780_ddestipcom')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e780_ddestipcom' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e780_ddestipcom' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE780Ddestipcom()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e780_ddestipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e780_ddestipcom', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e780_ddestipcom', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e780_ddestipcom', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e780_ddestipcom')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e780_ddestipcom_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e780_ddestipcom_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e781_dnromotor" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e781_dnromotor' ?>" >

                    <?php Lang::_lang('eku_e781_dnromotor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e781_dnromotor' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e781_dnromotor" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e781_dnromotor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e781_dnromotor' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e781_dnromotor' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE781Dnromotor()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e781_dnromotor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e781_dnromotor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e781_dnromotor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e781_dnromotor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e781_dnromotor')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e781_dnromotor_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e781_dnromotor_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e782_dcaptracc" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e782_dcaptracc' ?>" >

                    <?php Lang::_lang('eku_e782_dcaptracc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e782_dcaptracc' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e782_dcaptracc" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e782_dcaptracc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e782_dcaptracc' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e782_dcaptracc' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE782Dcaptracc()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e782_dcaptracc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e782_dcaptracc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e782_dcaptracc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e782_dcaptracc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e782_dcaptracc')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e782_dcaptracc_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e782_dcaptracc_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e783_danofab" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e783_danofab' ?>" >

                    <?php Lang::_lang('eku_e783_danofab', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e783_danofab' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e783_danofab" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e783_danofab')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e783_danofab' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e783_danofab' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE783Danofab()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e783_danofab', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e783_danofab', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e783_danofab', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e783_danofab', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e783_danofab')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e783_danofab_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e783_danofab_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e784_ctipveh" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e784_ctipveh' ?>" >

                    <?php Lang::_lang('eku_e784_ctipveh', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e784_ctipveh' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e784_ctipveh" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e784_ctipveh')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e784_ctipveh' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e784_ctipveh' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE784Ctipveh()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e784_ctipveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e784_ctipveh', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e784_ctipveh', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e784_ctipveh', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e784_ctipveh')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e784_ctipveh_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e784_ctipveh_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e785_dcapac" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e785_dcapac' ?>" >

                    <?php Lang::_lang('eku_e785_dcapac', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e785_dcapac' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e785_dcapac" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e785_dcapac')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e785_dcapac' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e785_dcapac' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE785Dcapac()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e785_dcapac', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e785_dcapac', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e785_dcapac', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e785_dcapac', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e785_dcapac')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e785_dcapac_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e785_dcapac_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e786_dcilin" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e786_dcilin' ?>" >

                    <?php Lang::_lang('eku_e786_dcilin', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=eku_e786_dcilin' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e786_dcilin" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e786_dcilin')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e786_dcilin' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e786_dcilin' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE786Dcilin()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e786_dcilin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e786_dcilin', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e786_dcilin', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e786_dcilin', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e786_dcilin')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e786_dcilin_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_eku_e786_dcilin_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE770GDtipDEGCamItemGVehNuevo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE770GDtipDEGCamItemGVehNuevo::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId()) != ''){ ?>
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

