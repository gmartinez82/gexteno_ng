<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_cliente_info_sifen';
$db_nombre_pagina = 'cli_cliente_info_sifen_alta';


$cli_cliente_info_sifen = new CliClienteInfoSifen();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cli_cliente_info_sifen = new CliClienteInfoSifen();
    // if(trim($hdn_id) != '') $cli_cliente_info_sifen->setId($hdn_id, false);

    $cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($hdn_id);
    if(!$cli_cliente_info_sifen){
        $cli_cliente_info_sifen = new CliClienteInfoSifen();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($cli_cliente_info_sifen){
            if(CliClienteInfoSifen::GEN_CONTROL_ALCANCE){
                if($cli_cliente_info_sifen->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=CliClienteInfoSifen&id='.$cli_cliente_info_sifen->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA')){ 
	$cli_cliente_info_sifen->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$cli_cliente_info_sifen->setCliClienteId(Gral::getVars(1, "cmb_cli_cliente_id", null));
	$cli_cliente_info_sifen->setCodigo(Gral::getVars(1, "txt_codigo"));
	$cli_cliente_info_sifen->setSifenDcodres(Gral::getVars(1, "txt_sifen_dcodres"));
	$cli_cliente_info_sifen->setSifenDmsgres(Gral::getVars(1, "txt_sifen_dmsgres"));
	$cli_cliente_info_sifen->setSifenXcontrucDruccons(Gral::getVars(1, "txt_sifen_xcontruc_druccons"));
	$cli_cliente_info_sifen->setSifenXcontrucDrazcons(Gral::getVars(1, "txt_sifen_xcontruc_drazcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDcodestcons(Gral::getVars(1, "txt_sifen_xcontruc_dcodestcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDdesestcons(Gral::getVars(1, "txt_sifen_xcontruc_ddesestcons"));
	$cli_cliente_info_sifen->setSifenXcontrucDrucfactelec(Gral::getVars(1, "txt_sifen_xcontruc_drucfactelec"));
	$cli_cliente_info_sifen->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $cli_cliente_info_sifen->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $cli_cliente_info_sifen->control();
                if(!$error->getExisteError()){
                    $cli_cliente_info_sifen->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$cli_cliente_info_sifen->getId().'&hash='.$cli_cliente_info_sifen->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $cli_cliente_info_sifen->control();
                if(!$error->getExisteError()){
                    $cli_cliente_info_sifen->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $cli_cliente_info_sifen->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($cli_cliente_info_sifen){
                if(CliClienteInfoSifen::GEN_CONTROL_ALCANCE){
                    if($cli_cliente_info_sifen->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=CliClienteInfoSifen&id='.$cli_cliente_info_sifen->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $cli_cliente_info_sifen->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $cli_cliente_info_sifen->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
            $cli_cliente_info_sifen->setCodigo(Gral::getVars(2, "codigo", ''));
            $cli_cliente_info_sifen->setSifenDcodres(Gral::getVars(2, "sifen_dcodres", ''));
            $cli_cliente_info_sifen->setSifenDmsgres(Gral::getVars(2, "sifen_dmsgres", ''));
            $cli_cliente_info_sifen->setSifenXcontrucDruccons(Gral::getVars(2, "sifen_xcontruc_druccons", ''));
            $cli_cliente_info_sifen->setSifenXcontrucDrazcons(Gral::getVars(2, "sifen_xcontruc_drazcons", ''));
            $cli_cliente_info_sifen->setSifenXcontrucDcodestcons(Gral::getVars(2, "sifen_xcontruc_dcodestcons", ''));
            $cli_cliente_info_sifen->setSifenXcontrucDdesestcons(Gral::getVars(2, "sifen_xcontruc_ddesestcons", ''));
            $cli_cliente_info_sifen->setSifenXcontrucDrucfactelec(Gral::getVars(2, "sifen_xcontruc_drucfactelec", ''));
            $cli_cliente_info_sifen->setObservacion(Gral::getVars(2, "observacion", ''));
            $cli_cliente_info_sifen->setOrden(Gral::getVars(2, "orden", 0));
            $cli_cliente_info_sifen->setEstado(Gral::getVars(2, "estado", 0));
            $cli_cliente_info_sifen->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $cli_cliente_info_sifen->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $cli_cliente_info_sifen->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $cli_cliente_info_sifen->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='cli_cliente_info_sifen' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CliClienteInfoSifens') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliClienteInfoSifen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliClienteInfoSifen::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cli_cliente_info_sifen'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_cli_cliente_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >

                    <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=cli_cliente_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cli_cliente_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_cliente_info_sifen->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cli_cliente_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(true), '...'), $cli_cliente_info_sifen->getCliClienteId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_cli_cliente_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_cli_cliente_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_dcodres" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_dcodres' ?>" >

                    <?php Lang::_lang('sifen_dcodres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_dcodres' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_dcodres" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_dcodres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_dcodres' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_dcodres' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenDcodres()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_dcodres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_dcodres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_dcodres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_dcodres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_dcodres')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_dcodres_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_dcodres_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_dmsgres" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_dmsgres' ?>" >

                    <?php Lang::_lang('sifen_dmsgres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_dmsgres' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_dmsgres" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_dmsgres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_dmsgres' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_dmsgres' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenDmsgres()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_dmsgres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_dmsgres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_dmsgres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_dmsgres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_dmsgres')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_dmsgres_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_dmsgres_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_xcontruc_druccons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_druccons' ?>" >

                    <?php Lang::_lang('sifen_xcontruc_druccons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_xcontruc_druccons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_xcontruc_druccons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_druccons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_xcontruc_druccons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_xcontruc_druccons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDruccons()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_druccons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_druccons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_druccons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_druccons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_druccons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_druccons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_druccons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_xcontruc_drazcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons' ?>" >

                    <?php Lang::_lang('sifen_xcontruc_drazcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_xcontruc_drazcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_xcontruc_drazcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_drazcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_xcontruc_drazcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_xcontruc_drazcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDrazcons()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_drazcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_drazcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_drazcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_drazcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_xcontruc_dcodestcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons' ?>" >

                    <?php Lang::_lang('sifen_xcontruc_dcodestcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_xcontruc_dcodestcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_xcontruc_dcodestcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_dcodestcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_xcontruc_dcodestcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_xcontruc_dcodestcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDcodestcons()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_dcodestcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_dcodestcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_dcodestcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_dcodestcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_xcontruc_ddesestcons" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons' ?>" >

                    <?php Lang::_lang('sifen_xcontruc_ddesestcons', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_xcontruc_ddesestcons' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_xcontruc_ddesestcons" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_ddesestcons')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_xcontruc_ddesestcons' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_xcontruc_ddesestcons' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDdesestcons()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_ddesestcons', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_ddesestcons')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_ddesestcons_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_ddesestcons_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_sifen_xcontruc_drucfactelec" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec' ?>" >

                    <?php Lang::_lang('sifen_xcontruc_drucfactelec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=sifen_xcontruc_drucfactelec' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_sifen_xcontruc_drucfactelec" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('sifen_xcontruc_drucfactelec')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_sifen_xcontruc_drucfactelec' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_sifen_xcontruc_drucfactelec' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getSifenXcontrucDrucfactelec()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_sifen_xcontruc_drucfactelec', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('sifen_xcontruc_drucfactelec')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_drucfactelec_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_sifen_xcontruc_drucfactelec_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_info_sifen_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($cli_cliente_info_sifen->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/cli_cliente_info_sifen/cli_cliente_info_sifen_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($cli_cliente_info_sifen->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliClienteInfoSifen::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliClienteInfoSifen::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cli_cliente_info_sifen->getId()) != ''){ ?>
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

