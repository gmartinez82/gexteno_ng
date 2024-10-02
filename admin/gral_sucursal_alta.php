<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_sucursal';
$db_nombre_pagina = 'gral_sucursal_alta';


$gral_sucursal = new GralSucursal();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_sucursal = new GralSucursal();
    // if(trim($hdn_id) != '') $gral_sucursal->setId($hdn_id, false);

    $gral_sucursal = GralSucursal::getOxId($hdn_id);
    if(!$gral_sucursal){
        $gral_sucursal = new GralSucursal();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_sucursal){
            if(GralSucursal::GEN_CONTROL_ALCANCE){
                if($gral_sucursal->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralSucursal&id='.$gral_sucursal->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA')){ 
	$gral_sucursal->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$gral_sucursal->setGralEmpresaId(Gral::getVars(1, "cmb_gral_empresa_id", null));
	$gral_sucursal->setGralSucursalTipoId(Gral::getVars(1, "cmb_gral_sucursal_tipo_id", null));
	$gral_sucursal->setDomicilio(Gral::getVars(1, "txt_domicilio"));
	$gral_sucursal->setTelefono(Gral::getVars(1, "txt_telefono"));
	$gral_sucursal->setEmail(Gral::getVars(1, "txt_email"));
	$gral_sucursal->setCodigoPostal(Gral::getVars(1, "txt_codigo_postal"));
	$gral_sucursal->setGeoLocalidadId(Gral::getVars(1, "cmb_geo_localidad_id", null));
	$gral_sucursal->setCodigo(Gral::getVars(1, "txt_codigo"));
	$gral_sucursal->setColor(Gral::getVars(1, "txt_color"));
	$gral_sucursal->setNumero(Gral::getVars(1, "txt_numero"));
	$gral_sucursal->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $gral_sucursal->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_sucursal->control();
                if(!$error->getExisteError()){
                    $gral_sucursal->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_sucursal->getId().'&hash='.$gral_sucursal->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_sucursal->control();
                if(!$error->getExisteError()){
                    $gral_sucursal->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_sucursal->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_sucursal){
                if(GralSucursal::GEN_CONTROL_ALCANCE){
                    if($gral_sucursal->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=GralSucursal&id='.$gral_sucursal->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $gral_sucursal->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_sucursal->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
            $gral_sucursal->setGralSucursalTipoId(Gral::getVars(2, "gral_sucursal_tipo_id", 'null'));
            $gral_sucursal->setDomicilio(Gral::getVars(2, "domicilio", ''));
            $gral_sucursal->setTelefono(Gral::getVars(2, "telefono", ''));
            $gral_sucursal->setEmail(Gral::getVars(2, "email", ''));
            $gral_sucursal->setCodigoPostal(Gral::getVars(2, "codigo_postal", ''));
            $gral_sucursal->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
            $gral_sucursal->setCodigo(Gral::getVars(2, "codigo", ''));
            $gral_sucursal->setLatitud(Gral::getVars(2, "latitud", 0));
            $gral_sucursal->setLongitud(Gral::getVars(2, "longitud", 0));
            $gral_sucursal->setColor(Gral::getVars(2, "color", ''));
            $gral_sucursal->setNumero(Gral::getVars(2, "numero", ''));
            $gral_sucursal->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_sucursal->setOrden(Gral::getVars(2, "orden", 0));
            $gral_sucursal->setEstado(Gral::getVars(2, "estado", 0));
            $gral_sucursal->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_sucursal->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_sucursal->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_sucursal->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralSucursal') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralSucursal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralSucursal::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_sucursal'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($gral_sucursal->getDescripcion()) ?>' size='50' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_empresa_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >

                    <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=gral_empresa_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_empresa_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($gral_sucursal->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_empresa_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $gral_sucursal->getGralEmpresaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sucursal_tipo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_tipo_id' ?>" >

                    <?php Lang::_lang('GralSucursalTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=gral_sucursal_tipo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_tipo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GRAL_SUCURSAL_TIPO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_tipo_id" clase_id="gral_sucursal_tipo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_tipo_id" <?php echo ($gral_sucursal->getGralSucursalTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_tipo_id" clase_id="gral_sucursal_tipo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_tipo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_tipo_id', Gral::getCmbFiltro(GralSucursalTipo::getGralSucursalTiposCmb(true), '...'), $gral_sucursal->getGralSucursalTipoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_tipo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_domicilio" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_domicilio' ?>" >

                    <?php Lang::_lang('Domicilio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=domicilio' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_domicilio" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('domicilio')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_domicilio' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_domicilio' value='<?php Gral::_echoTxt($gral_sucursal->getDomicilio()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_domicilio', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_domicilio', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_domicilio', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('domicilio')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_telefono" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >

                    <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=telefono' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_telefono" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_telefono' value='<?php Gral::_echoTxt($gral_sucursal->getTelefono()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_email" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >

                    <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=email' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_email" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_email' value='<?php Gral::_echoTxt($gral_sucursal->getEmail()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo_postal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_postal' ?>" >

                    <?php Lang::_lang('Codigo Postal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=codigo_postal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_postal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_postal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_postal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_postal' value='<?php Gral::_echoTxt($gral_sucursal->getCodigoPostal()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_postal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_postal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_postal')->getMensaje()) ?></div>
            </td>
        </tr>
        
                    <tr>
                        <td id="label_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>" >

                            <?php Lang::_lang('Pais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=geo_pais_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
                    			if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_pais_id = $gral_sucursal->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
                        $c = new Criterio(GeoPais::SES_CRITERIOS);
                        $c->add('geo_pais.x', $x, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_pais');
                        $c = GeoPais::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), '...'), $cmb_geo_pais_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="x" elemento_id="cmb_geo_pais_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_PAIS')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_pais_id" clase_id="geo_pais" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_pais_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_pais_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
                    <tr>
                        <td id="label_cmb_geo_provincia_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_provincia_id' ?>" >

                            <?php Lang::_lang('Provincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=geo_provincia_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
                    			if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_provincia_id = $gral_sucursal->getGeoLocalidad()->getGeoProvincia()->getId();			
                        $c = new Criterio(GeoProvincia::SES_CRITERIOS);
                        $c->add('geo_provincia.geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_provincia');
                        $c = GeoProvincia::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), '...'), $cmb_geo_provincia_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_provincia_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_provincia_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_provincia_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
                    <tr>
                        <td id="label_cmb_geo_localidad_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_localidad_id' ?>" >

                            <?php Lang::_lang('Localidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=geo_localidad_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
                    			if(!Gral::esPost() and $gral_sucursal->getId()) $cmb_geo_localidad_id = $gral_sucursal->getGeoLocalidad()->getId();			
                        $c = new Criterio(GeoLocalidad::SES_CRITERIOS);
                        $c->add('geo_localidad.geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_localidad');
                        $c = GeoLocalidad::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), '...'), $cmb_geo_localidad_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>			
                        <div class="div_botonera_cmb_alta_editar">
                            <img class="img_btn_editar" elemento_id="cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />

                            <img class="img_btn_agregar_nuevo" elemento_id="cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                            <div class="div_modal_cmb_geo_localidad_id"></div>
                        </div>
                        <?php } ?>

                            <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                            <?php } ?>   

                            <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_localidad_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                                <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_geo_localidad_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                            <?php } ?>   

                            <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>

                        </td>
                    </tr>
                    
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($gral_sucursal->getCodigo()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >

                    <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=color' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color' type='text' class='textbox <?php echo $error_input_css ?> minicolors' id='txt_color' value='<?php Gral::_echoTxt($gral_sucursal->getColor()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_color', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_color', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('color')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_numero" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_numero' ?>" >

                    <?php Lang::_lang('Numero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=numero' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_numero" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('numero')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_numero' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_numero' value='<?php Gral::_echoTxt($gral_sucursal->getNumero()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_numero', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_numero', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_numero', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('numero')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_sucursal->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_sucursal->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_sucursal->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralSucursal::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralSucursal::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_sucursal->getId()) != ''){ ?>
    <div class="alta relaciones">
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_vta_punto_venta.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_cli_cliente.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_vta_vendedor.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_us_usuario.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_gral_caja.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_sucursal_pan_panol.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal/bloque_relacion_gral_centro_costo_gral_sucursal.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'gral_sucursal_set.php' ?>
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

