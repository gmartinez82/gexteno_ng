<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_e900_g_dtip_d_e_g_transp';
$db_nombre_pagina = 'eku_de_e900_g_dtip_d_e_g_transp_alta';


$eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
    // if(trim($hdn_id) != '') $eku_de_e900_g_dtip_d_e_g_transp->setId($hdn_id, false);

    $eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($hdn_id);
    if(!$eku_de_e900_g_dtip_d_e_g_transp){
        $eku_de_e900_g_dtip_d_e_g_transp = new EkuDeE900GDtipDEGTransp();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($eku_de_e900_g_dtip_d_e_g_transp){
            if(EkuDeE900GDtipDEGTransp::GEN_CONTROL_ALCANCE){
                if($eku_de_e900_g_dtip_d_e_g_transp->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE900GDtipDEGTransp&id='.$eku_de_e900_g_dtip_d_e_g_transp->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA')){ 
	$eku_de_e900_g_dtip_d_e_g_transp->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuDeId(Gral::getVars(1, "cmb_eku_de_id", null));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE901Itiptrans(Gral::getVars(1, "txt_eku_e901_itiptrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE902Ddestiptrans(Gral::getVars(1, "txt_eku_e902_ddestiptrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE903Imodtrans(Gral::getVars(1, "txt_eku_e903_imodtrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE904Ddesmodtrans(Gral::getVars(1, "txt_eku_e904_ddesmodtrans"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE905Irespflete(Gral::getVars(1, "txt_eku_e905_irespflete"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE906Ccondneg(Gral::getVars(1, "txt_eku_e906_ccondneg"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE907Dnumanif(Gral::getVars(1, "txt_eku_e907_dnumanif"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE908Dnudespimp(Gral::getVars(1, "txt_eku_e908_dnudespimp"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE909Dinitras(Gral::getVars(1, "txt_eku_e909_dinitras"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE910Dfintras(Gral::getVars(1, "txt_eku_e910_dfintras"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE911Cpaisdest(Gral::getVars(1, "txt_eku_e911_cpaisdest"));
	$eku_de_e900_g_dtip_d_e_g_transp->setEkuE912Ddespaisdest(Gral::getVars(1, "txt_eku_e912_ddespaisdest"));
	$eku_de_e900_g_dtip_d_e_g_transp->setCodigo(Gral::getVars(1, "txt_codigo"));
	$eku_de_e900_g_dtip_d_e_g_transp->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $eku_de_e900_g_dtip_d_e_g_transp->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $eku_de_e900_g_dtip_d_e_g_transp->control();
                if(!$error->getExisteError()){
                    $eku_de_e900_g_dtip_d_e_g_transp->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$eku_de_e900_g_dtip_d_e_g_transp->getId().'&hash='.$eku_de_e900_g_dtip_d_e_g_transp->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $eku_de_e900_g_dtip_d_e_g_transp->control();
                if(!$error->getExisteError()){
                    $eku_de_e900_g_dtip_d_e_g_transp->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $eku_de_e900_g_dtip_d_e_g_transp->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($eku_de_e900_g_dtip_d_e_g_transp){
                if(EkuDeE900GDtipDEGTransp::GEN_CONTROL_ALCANCE){
                    if($eku_de_e900_g_dtip_d_e_g_transp->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=EkuDeE900GDtipDEGTransp&id='.$eku_de_e900_g_dtip_d_e_g_transp->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $eku_de_e900_g_dtip_d_e_g_transp->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE901Itiptrans(Gral::getVars(2, "eku_e901_itiptrans", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE902Ddestiptrans(Gral::getVars(2, "eku_e902_ddestiptrans", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE903Imodtrans(Gral::getVars(2, "eku_e903_imodtrans", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE904Ddesmodtrans(Gral::getVars(2, "eku_e904_ddesmodtrans", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE905Irespflete(Gral::getVars(2, "eku_e905_irespflete", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE906Ccondneg(Gral::getVars(2, "eku_e906_ccondneg", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE907Dnumanif(Gral::getVars(2, "eku_e907_dnumanif", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE908Dnudespimp(Gral::getVars(2, "eku_e908_dnudespimp", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE909Dinitras(Gral::getVars(2, "eku_e909_dinitras", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE910Dfintras(Gral::getVars(2, "eku_e910_dfintras", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE911Cpaisdest(Gral::getVars(2, "eku_e911_cpaisdest", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setEkuE912Ddespaisdest(Gral::getVars(2, "eku_e912_ddespaisdest", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setCodigo(Gral::getVars(2, "codigo", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setObservacion(Gral::getVars(2, "observacion", ''));
            $eku_de_e900_g_dtip_d_e_g_transp->setOrden(Gral::getVars(2, "orden", 0));
            $eku_de_e900_g_dtip_d_e_g_transp->setEstado(Gral::getVars(2, "estado", 0));
            $eku_de_e900_g_dtip_d_e_g_transp->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $eku_de_e900_g_dtip_d_e_g_transp->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $eku_de_e900_g_dtip_d_e_g_transp->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $eku_de_e900_g_dtip_d_e_g_transp->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='eku_de_e900_g_dtip_d_e_g_transp' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeE900GDtipDEGTransps') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE900GDtipDEGTransp::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE900GDtipDEGTransp::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_eku_de_e900_g_dtip_d_e_g_transp'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_eku_de_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >

                    <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_de_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_eku_de_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA_CMB_EDIT_EKU_DE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_e900_g_dtip_d_e_g_transp->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_eku_de_id" clase_id="eku_de" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_eku_de_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(true), '...'), $eku_de_e900_g_dtip_d_e_g_transp->getEkuDeId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_de_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_de_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e901_itiptrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e901_itiptrans' ?>" >

                    <?php Lang::_lang('eku_e901_itiptrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e901_itiptrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e901_itiptrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e901_itiptrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e901_itiptrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e901_itiptrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE901Itiptrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e901_itiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e901_itiptrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e901_itiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e901_itiptrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e901_itiptrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e901_itiptrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e901_itiptrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e902_ddestiptrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e902_ddestiptrans' ?>" >

                    <?php Lang::_lang('eku_e902_ddestiptrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e902_ddestiptrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e902_ddestiptrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e902_ddestiptrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e902_ddestiptrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e902_ddestiptrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE902Ddestiptrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e902_ddestiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e902_ddestiptrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e902_ddestiptrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e902_ddestiptrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e902_ddestiptrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e902_ddestiptrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e902_ddestiptrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e903_imodtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e903_imodtrans' ?>" >

                    <?php Lang::_lang('eku_e903_imodtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e903_imodtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e903_imodtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e903_imodtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e903_imodtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e903_imodtrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE903Imodtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e903_imodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e903_imodtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e903_imodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e903_imodtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e903_imodtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e903_imodtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e903_imodtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e904_ddesmodtrans" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans' ?>" >

                    <?php Lang::_lang('eku_e904_ddesmodtrans', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e904_ddesmodtrans' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e904_ddesmodtrans" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e904_ddesmodtrans')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e904_ddesmodtrans' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e904_ddesmodtrans' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE904Ddesmodtrans()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e904_ddesmodtrans', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e904_ddesmodtrans')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e904_ddesmodtrans_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e904_ddesmodtrans_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e905_irespflete" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e905_irespflete' ?>" >

                    <?php Lang::_lang('eku_e905_irespflete', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e905_irespflete' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e905_irespflete" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e905_irespflete')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e905_irespflete' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e905_irespflete' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE905Irespflete()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e905_irespflete', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e905_irespflete', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e905_irespflete', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e905_irespflete', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e905_irespflete')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e905_irespflete_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e905_irespflete_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e906_ccondneg" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e906_ccondneg' ?>" >

                    <?php Lang::_lang('eku_e906_ccondneg', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e906_ccondneg' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e906_ccondneg" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e906_ccondneg')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e906_ccondneg' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e906_ccondneg' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE906Ccondneg()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e906_ccondneg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e906_ccondneg', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e906_ccondneg', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e906_ccondneg', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e906_ccondneg')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e906_ccondneg_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e906_ccondneg_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e907_dnumanif" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e907_dnumanif' ?>" >

                    <?php Lang::_lang('eku_e907_dnumanif', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e907_dnumanif' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e907_dnumanif" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e907_dnumanif')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e907_dnumanif' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e907_dnumanif' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE907Dnumanif()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e907_dnumanif', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e907_dnumanif', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e907_dnumanif', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e907_dnumanif', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e907_dnumanif')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e907_dnumanif_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e907_dnumanif_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e908_dnudespimp" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e908_dnudespimp' ?>" >

                    <?php Lang::_lang('eku_e908_dnudespimp', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e908_dnudespimp' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e908_dnudespimp" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e908_dnudespimp')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e908_dnudespimp' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e908_dnudespimp' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE908Dnudespimp()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e908_dnudespimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e908_dnudespimp', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e908_dnudespimp', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e908_dnudespimp', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e908_dnudespimp')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e908_dnudespimp_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e908_dnudespimp_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e909_dinitras" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e909_dinitras' ?>" >

                    <?php Lang::_lang('eku_e909_dinitras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e909_dinitras' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e909_dinitras" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e909_dinitras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e909_dinitras' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e909_dinitras' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE909Dinitras()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e909_dinitras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e909_dinitras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e909_dinitras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e909_dinitras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e909_dinitras')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e909_dinitras_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e909_dinitras_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e910_dfintras" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e910_dfintras' ?>" >

                    <?php Lang::_lang('eku_e910_dfintras', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e910_dfintras' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e910_dfintras" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e910_dfintras')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e910_dfintras' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e910_dfintras' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE910Dfintras()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e910_dfintras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e910_dfintras', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e910_dfintras', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e910_dfintras', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e910_dfintras')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e910_dfintras_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e910_dfintras_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e911_cpaisdest" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e911_cpaisdest' ?>" >

                    <?php Lang::_lang('eku_e911_cpaisdest', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e911_cpaisdest' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e911_cpaisdest" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e911_cpaisdest')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e911_cpaisdest' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e911_cpaisdest' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE911Cpaisdest()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e911_cpaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e911_cpaisdest', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e911_cpaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e911_cpaisdest', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e911_cpaisdest')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e911_cpaisdest_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e911_cpaisdest_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_eku_e912_ddespaisdest" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_eku_e912_ddespaisdest' ?>" >

                    <?php Lang::_lang('eku_e912_ddespaisdest', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=eku_e912_ddespaisdest' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_eku_e912_ddespaisdest" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('eku_e912_ddespaisdest')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_eku_e912_ddespaisdest' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_eku_e912_ddespaisdest' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getEkuE912Ddespaisdest()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_eku_e912_ddespaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_eku_e912_ddespaisdest', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e912_ddespaisdest', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_eku_e912_ddespaisdest', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_e912_ddespaisdest')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e912_ddespaisdest_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_eku_e912_ddespaisdest_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getCodigo()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=eku_de_e900_g_dtip_d_e_g_transp_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($eku_de_e900_g_dtip_d_e_g_transp->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(EkuDeE900GDtipDEGTransp::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(EkuDeE900GDtipDEGTransp::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($eku_de_e900_g_dtip_d_e_g_transp->getId()) != ''){ ?>
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

