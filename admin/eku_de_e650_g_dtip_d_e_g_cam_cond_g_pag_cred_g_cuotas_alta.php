<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas';
$db_nombre_pagina = 'eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta';


$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = new EkuDeE650GDtipDEGCamCondGPagCredGCuotas();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = new EkuDeE650GDtipDEGCamCondGPagCredGCuotas();
    // if(trim($hdn_id) != '') $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setId($hdn_id, false);

    $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getOxId($hdn_id);
    if(!$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){
        $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = new EkuDeE650GDtipDEGCamCondGPagCredGCuotas();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){
            if(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_CONTROL_ALCANCE){
                if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE650GDtipDEGCamCondGPagCredGCuotas&id='.$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ALTA')){ 
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE653Cmonecuo(Gral::getVars(1, "txt_eku_e653_cmonecuo"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE654Ddmonecuo(Gral::getVars(1, "txt_eku_e654_ddmonecuo"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE651Dmoncuota(Gral::getVars(1, "txt_eku_e651_dmoncuota"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE652Dvenccuo(Gral::getVars(1, "txt_eku_e652_dvenccuo"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->control();
                if(!$error->getExisteError()){
                    $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId().'&hash='.$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->control();
                if(!$error->getExisteError()){
                    $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){
                if(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::GEN_CONTROL_ALCANCE){
                    if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE650GDtipDEGCamCondGPagCredGCuotas&id='.$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE653Cmonecuo(Gral::getVars(2, "eku_e653_cmonecuo", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE654Ddmonecuo(Gral::getVars(2, "eku_e654_ddmonecuo", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE651Dmoncuota(Gral::getVars(2, "eku_e651_dmoncuota", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEkuE652Dvenccuo(Gral::getVars(2, "eku_e652_dvenccuo", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE650GDtipDEGCamCondGPagCredGCuotass') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e653_cmonecuo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e653_cmonecuo' ?>" >

                    <?php Lang::_lang('eku_e653_cmonecuo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=eku_e653_cmonecuo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e653_cmonecuo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e653_cmonecuo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e653_cmonecuo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e653_cmonecuo' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE653Cmonecuo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e653_cmonecuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e653_cmonecuo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e653_cmonecuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e653_cmonecuo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e653_cmonecuo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e653_cmonecuo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e653_cmonecuo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e654_ddmonecuo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e654_ddmonecuo' ?>" >

                    <?php Lang::_lang('eku_e654_ddmonecuo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=eku_e654_ddmonecuo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e654_ddmonecuo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e654_ddmonecuo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e654_ddmonecuo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e654_ddmonecuo' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE654Ddmonecuo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e654_ddmonecuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e654_ddmonecuo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e654_ddmonecuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e654_ddmonecuo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e654_ddmonecuo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e654_ddmonecuo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e654_ddmonecuo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e651_dmoncuota" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e651_dmoncuota' ?>" >

                    <?php Lang::_lang('eku_e651_dmoncuota', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=eku_e651_dmoncuota' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e651_dmoncuota" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e651_dmoncuota')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e651_dmoncuota' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e651_dmoncuota' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE651Dmoncuota()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e651_dmoncuota', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e651_dmoncuota', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e651_dmoncuota', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e651_dmoncuota', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e651_dmoncuota')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e651_dmoncuota_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e651_dmoncuota_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e652_dvenccuo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e652_dvenccuo' ?>" >

                    <?php Lang::_lang('eku_e652_dvenccuo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=eku_e652_dvenccuo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e652_dvenccuo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e652_dvenccuo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e652_dvenccuo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e652_dvenccuo' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE652Dvenccuo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e652_dvenccuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e652_dvenccuo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e652_dvenccuo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e652_dvenccuo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e652_dvenccuo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e652_dvenccuo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_eku_e652_dvenccuo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) != ''){ ?>
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

