<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_h001_g_cam_d_e_asoc';
$db_nombre_pagina = 'eku_de_h001_g_cam_d_e_asoc_alta';


$eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
    // if(trim($hdn_id) != '') $eku_de_h001_g_cam_d_e_asoc->setId($hdn_id, false);

    $eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($hdn_id);
    if(!$eku_de_h001_g_cam_d_e_asoc){
        $eku_de_h001_g_cam_d_e_asoc = new EkuDeH001GCamDEAsoc();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_h001_g_cam_d_e_asoc){
            if(EkuDeH001GCamDEAsoc::GEN_CONTROL_ALCANCE){
                if($eku_de_h001_g_cam_d_e_asoc->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeH001GCamDEAsoc&id='.$eku_de_h001_g_cam_d_e_asoc->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA')){ 
	$eku_de_h001_g_cam_d_e_asoc->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH002Itipdocaso(Gral::getVars(1, "txt_eku_h002_itipdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH003Ddestipdocaso(Gral::getVars(1, "txt_eku_h003_ddestipdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH004Dcdcderef(Gral::getVars(1, "txt_eku_h004_dcdcderef"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH005Dntimdi(Gral::getVars(1, "txt_eku_h005_dntimdi"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH006Destdocaso(Gral::getVars(1, "txt_eku_h006_destdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH007Dpexpdocaso(Gral::getVars(1, "txt_eku_h007_dpexpdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH008Dnumdocaso(Gral::getVars(1, "txt_eku_h008_dnumdocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH009Itipodocaso(Gral::getVars(1, "txt_eku_h009_itipodocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH010Ddtipodocaso(Gral::getVars(1, "txt_eku_h010_ddtipodocaso"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH011Dfecemidi(Gral::getVars(1, "txt_eku_h011_dfecemidi"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH012Dnumcomret(Gral::getVars(1, "txt_eku_h012_dnumcomret"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH013Dnumrescf(Gral::getVars(1, "txt_eku_h013_dnumrescf"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH014Itipcons(Gral::getVars(1, "txt_eku_h014_itipcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH015Ddestipcons(Gral::getVars(1, "txt_eku_h015_ddestipcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH016Dnumcons(Gral::getVars(1, "txt_eku_h016_dnumcons"));
	$eku_de_h001_g_cam_d_e_asoc->setEkuH017Dnumcontrol(Gral::getVars(1, "txt_eku_h017_dnumcontrol"));
	$eku_de_h001_g_cam_d_e_asoc->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_h001_g_cam_d_e_asoc->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_h001_g_cam_d_e_asoc->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_h001_g_cam_d_e_asoc->control();
                if(!$error->getExisteError()){
                    $eku_de_h001_g_cam_d_e_asoc->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_h001_g_cam_d_e_asoc->getId().'&hash='.$eku_de_h001_g_cam_d_e_asoc->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_h001_g_cam_d_e_asoc->control();
                if(!$error->getExisteError()){
                    $eku_de_h001_g_cam_d_e_asoc->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_h001_g_cam_d_e_asoc->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_h001_g_cam_d_e_asoc){
                if(EkuDeH001GCamDEAsoc::GEN_CONTROL_ALCANCE){
                    if($eku_de_h001_g_cam_d_e_asoc->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeH001GCamDEAsoc&id='.$eku_de_h001_g_cam_d_e_asoc->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_h001_g_cam_d_e_asoc->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH002Itipdocaso(Gral::getVars(2, "eku_h002_itipdocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH003Ddestipdocaso(Gral::getVars(2, "eku_h003_ddestipdocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH004Dcdcderef(Gral::getVars(2, "eku_h004_dcdcderef", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH005Dntimdi(Gral::getVars(2, "eku_h005_dntimdi", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH006Destdocaso(Gral::getVars(2, "eku_h006_destdocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH007Dpexpdocaso(Gral::getVars(2, "eku_h007_dpexpdocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH008Dnumdocaso(Gral::getVars(2, "eku_h008_dnumdocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH009Itipodocaso(Gral::getVars(2, "eku_h009_itipodocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH010Ddtipodocaso(Gral::getVars(2, "eku_h010_ddtipodocaso", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH011Dfecemidi(Gral::getVars(2, "eku_h011_dfecemidi", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH012Dnumcomret(Gral::getVars(2, "eku_h012_dnumcomret", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH013Dnumrescf(Gral::getVars(2, "eku_h013_dnumrescf", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH014Itipcons(Gral::getVars(2, "eku_h014_itipcons", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH015Ddestipcons(Gral::getVars(2, "eku_h015_ddestipcons", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH016Dnumcons(Gral::getVars(2, "eku_h016_dnumcons", ''));
            $eku_de_h001_g_cam_d_e_asoc->setEkuH017Dnumcontrol(Gral::getVars(2, "eku_h017_dnumcontrol", ''));
            $eku_de_h001_g_cam_d_e_asoc->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_h001_g_cam_d_e_asoc->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_h001_g_cam_d_e_asoc->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_h001_g_cam_d_e_asoc->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_h001_g_cam_d_e_asoc->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_h001_g_cam_d_e_asoc->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_h001_g_cam_d_e_asoc->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_h001_g_cam_d_e_asoc->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_h001_g_cam_d_e_asoc' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeH001GCamDEAsocs') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeH001GCamDEAsoc::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeH001GCamDEAsoc::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_h001_g_cam_d_e_asoc'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_h001_g_cam_d_e_asoc->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_h001_g_cam_d_e_asoc->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h002_itipdocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h002_itipdocaso' ?>" >

                    <?php Lang::_lang('eku_h002_itipdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h002_itipdocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h002_itipdocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h002_itipdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h002_itipdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h002_itipdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h002_itipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h002_itipdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h002_itipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h002_itipdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h002_itipdocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h002_itipdocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h002_itipdocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h003_ddestipdocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso' ?>" >

                    <?php Lang::_lang('eku_h003_ddestipdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h003_ddestipdocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h003_ddestipdocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h003_ddestipdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h003_ddestipdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h003_ddestipdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h003_ddestipdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h003_ddestipdocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h003_ddestipdocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h003_ddestipdocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h004_dcdcderef" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h004_dcdcderef' ?>" >

                    <?php Lang::_lang('eku_h004_dcdcderef', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h004_dcdcderef' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h004_dcdcderef" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h004_dcdcderef')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h004_dcdcderef' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h004_dcdcderef' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h004_dcdcderef', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h004_dcdcderef', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h004_dcdcderef', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h004_dcdcderef', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h004_dcdcderef')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h004_dcdcderef_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h004_dcdcderef_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h005_dntimdi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h005_dntimdi' ?>" >

                    <?php Lang::_lang('eku_h005_dntimdi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h005_dntimdi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h005_dntimdi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h005_dntimdi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h005_dntimdi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h005_dntimdi' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h005_dntimdi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h005_dntimdi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h005_dntimdi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h005_dntimdi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h005_dntimdi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h005_dntimdi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h005_dntimdi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h006_destdocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h006_destdocaso' ?>" >

                    <?php Lang::_lang('eku_h006_destdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h006_destdocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h006_destdocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h006_destdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h006_destdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h006_destdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h006_destdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h006_destdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h006_destdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h006_destdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h006_destdocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h006_destdocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h006_destdocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h007_dpexpdocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso' ?>" >

                    <?php Lang::_lang('eku_h007_dpexpdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h007_dpexpdocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h007_dpexpdocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h007_dpexpdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h007_dpexpdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h007_dpexpdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h007_dpexpdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h007_dpexpdocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h007_dpexpdocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h007_dpexpdocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h008_dnumdocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h008_dnumdocaso' ?>" >

                    <?php Lang::_lang('eku_h008_dnumdocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h008_dnumdocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h008_dnumdocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h008_dnumdocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h008_dnumdocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h008_dnumdocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h008_dnumdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h008_dnumdocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h008_dnumdocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h008_dnumdocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h008_dnumdocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h008_dnumdocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h008_dnumdocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h009_itipodocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h009_itipodocaso' ?>" >

                    <?php Lang::_lang('eku_h009_itipodocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h009_itipodocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h009_itipodocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h009_itipodocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h009_itipodocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h009_itipodocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h009_itipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h009_itipodocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h009_itipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h009_itipodocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h009_itipodocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h009_itipodocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h009_itipodocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h010_ddtipodocaso" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso' ?>" >

                    <?php Lang::_lang('eku_h010_ddtipodocaso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h010_ddtipodocaso' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h010_ddtipodocaso" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h010_ddtipodocaso')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h010_ddtipodocaso' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h010_ddtipodocaso' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h010_ddtipodocaso', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h010_ddtipodocaso')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h010_ddtipodocaso_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h010_ddtipodocaso_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h011_dfecemidi" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h011_dfecemidi' ?>" >

                    <?php Lang::_lang('eku_h011_dfecemidi', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h011_dfecemidi' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h011_dfecemidi" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h011_dfecemidi')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h011_dfecemidi' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h011_dfecemidi' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h011_dfecemidi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h011_dfecemidi', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h011_dfecemidi', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h011_dfecemidi', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h011_dfecemidi')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h011_dfecemidi_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h011_dfecemidi_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h012_dnumcomret" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h012_dnumcomret' ?>" >

                    <?php Lang::_lang('eku_h012_dnumcomret', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h012_dnumcomret' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h012_dnumcomret" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h012_dnumcomret')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h012_dnumcomret' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h012_dnumcomret' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h012_dnumcomret', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h012_dnumcomret', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h012_dnumcomret', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h012_dnumcomret', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h012_dnumcomret')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h012_dnumcomret_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h012_dnumcomret_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h013_dnumrescf" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h013_dnumrescf' ?>" >

                    <?php Lang::_lang('eku_h013_dnumrescf', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h013_dnumrescf' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h013_dnumrescf" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h013_dnumrescf')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h013_dnumrescf' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h013_dnumrescf' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h013_dnumrescf', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h013_dnumrescf', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h013_dnumrescf', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h013_dnumrescf', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h013_dnumrescf')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h013_dnumrescf_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h013_dnumrescf_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h014_itipcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h014_itipcons' ?>" >

                    <?php Lang::_lang('eku_h014_itipcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h014_itipcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h014_itipcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h014_itipcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h014_itipcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h014_itipcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h014_itipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h014_itipcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h014_itipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h014_itipcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h014_itipcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h014_itipcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h014_itipcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h015_ddestipcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h015_ddestipcons' ?>" >

                    <?php Lang::_lang('eku_h015_ddestipcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h015_ddestipcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h015_ddestipcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h015_ddestipcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h015_ddestipcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h015_ddestipcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h015_ddestipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h015_ddestipcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h015_ddestipcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h015_ddestipcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h015_ddestipcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h015_ddestipcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h015_ddestipcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h016_dnumcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h016_dnumcons' ?>" >

                    <?php Lang::_lang('eku_h016_dnumcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h016_dnumcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h016_dnumcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h016_dnumcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h016_dnumcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h016_dnumcons' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h016_dnumcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h016_dnumcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h016_dnumcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h016_dnumcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h016_dnumcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h016_dnumcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h016_dnumcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_h017_dnumcontrol" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_h017_dnumcontrol' ?>" >

                    <?php Lang::_lang('eku_h017_dnumcontrol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=eku_h017_dnumcontrol' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_h017_dnumcontrol" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_h017_dnumcontrol')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_h017_dnumcontrol' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_h017_dnumcontrol' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_h017_dnumcontrol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_h017_dnumcontrol', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h017_dnumcontrol', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_h017_dnumcontrol', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_h017_dnumcontrol')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h017_dnumcontrol_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_eku_h017_dnumcontrol_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_h001_g_cam_d_e_asoc_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_h001_g_cam_d_e_asoc->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeH001GCamDEAsoc::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeH001GCamDEAsoc::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_h001_g_cam_d_e_asoc->getId()) != ''){ ?>
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

