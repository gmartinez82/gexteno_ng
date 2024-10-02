<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_sucursal_valoracion';
$db_nombre_pagina = 'gral_sucursal_valoracion_alta';


$gral_sucursal_valoracion = new GralSucursalValoracion();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $gral_sucursal_valoracion = new GralSucursalValoracion();
    // if(trim($hdn_id) != '') $gral_sucursal_valoracion->setId($hdn_id, false);

    $gral_sucursal_valoracion = GralSucursalValoracion::getOxId($hdn_id);
    if(!$gral_sucursal_valoracion){
        $gral_sucursal_valoracion = new GralSucursalValoracion();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($gral_sucursal_valoracion){
            if(GralSucursalValoracion::GEN_CONTROL_ALCANCE){
                if($gral_sucursal_valoracion->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=GralSucursalValoracion&id='.$gral_sucursal_valoracion->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA')){ 
	$gral_sucursal_valoracion->setGralSucursalValoracionAgrupacionId(Gral::getVars(1, "cmb_gral_sucursal_valoracion_agrupacion_id", null));
	$gral_sucursal_valoracion->setGralSucursalValoracionTipoItemId(Gral::getVars(1, "cmb_gral_sucursal_valoracion_tipo_item_id", null));
	$gral_sucursal_valoracion->setApellido(Gral::getVars(1, "txt_apellido"));
	$gral_sucursal_valoracion->setNombre(Gral::getVars(1, "txt_nombre"));
	$gral_sucursal_valoracion->setEmail(Gral::getVars(1, "txt_email"));
	$gral_sucursal_valoracion->setTelefono(Gral::getVars(1, "txt_telefono"));
	$gral_sucursal_valoracion->setFecha(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha")));
	$gral_sucursal_valoracion->setGralSucursalId(Gral::getVars(1, "cmb_gral_sucursal_id", null));
	$gral_sucursal_valoracion->setValoracion(Gral::getVars(1, "txt_valoracion", 0));
	$gral_sucursal_valoracion->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $gral_sucursal_valoracion->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $gral_sucursal_valoracion->control();
                if(!$error->getExisteError()){
                    $gral_sucursal_valoracion->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$gral_sucursal_valoracion->getId().'&hash='.$gral_sucursal_valoracion->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $gral_sucursal_valoracion->control();
                if(!$error->getExisteError()){
                    $gral_sucursal_valoracion->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $gral_sucursal_valoracion->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($gral_sucursal_valoracion){
                if(GralSucursalValoracion::GEN_CONTROL_ALCANCE){
                    if($gral_sucursal_valoracion->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=GralSucursalValoracion&id='.$gral_sucursal_valoracion->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $gral_sucursal_valoracion->setGralSucursalValoracionAgrupacionId(Gral::getVars(2, "gral_sucursal_valoracion_agrupacion_id", 'null'));
            $gral_sucursal_valoracion->setGralSucursalValoracionTipoItemId(Gral::getVars(2, "gral_sucursal_valoracion_tipo_item_id", 'null'));
            $gral_sucursal_valoracion->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $gral_sucursal_valoracion->setApellido(Gral::getVars(2, "apellido", ''));
            $gral_sucursal_valoracion->setNombre(Gral::getVars(2, "nombre", ''));
            $gral_sucursal_valoracion->setEmail(Gral::getVars(2, "email", ''));
            $gral_sucursal_valoracion->setTelefono(Gral::getVars(2, "telefono", ''));
            $gral_sucursal_valoracion->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
            $gral_sucursal_valoracion->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
            $gral_sucursal_valoracion->setValoracion(Gral::getVars(2, "valoracion", 0));
            $gral_sucursal_valoracion->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
            $gral_sucursal_valoracion->setSession(Gral::getVars(2, "session", ''));
            $gral_sucursal_valoracion->setNavegador(Gral::getVars(2, "navegador", ''));
            $gral_sucursal_valoracion->setIp(Gral::getVars(2, "ip", ''));
            $gral_sucursal_valoracion->setObservacion(Gral::getVars(2, "observacion", ''));
            $gral_sucursal_valoracion->setOrden(Gral::getVars(2, "orden", 0));
            $gral_sucursal_valoracion->setEstado(Gral::getVars(2, "estado", 0));
            $gral_sucursal_valoracion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $gral_sucursal_valoracion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $gral_sucursal_valoracion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $gral_sucursal_valoracion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='gral_sucursal_valoracion' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('GralSucursalValoracions') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralSucursalValoracion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralSucursalValoracion::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_gral_sucursal_valoracion'>
        
            <tr>
                <td id="label_cmb_gral_sucursal_valoracion_agrupacion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_agrupacion_id' ?>" >

                    <?php Lang::_lang('GralSucursalValoracionAgrupacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=gral_sucursal_valoracion_agrupacion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_valoracion_agrupacion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_valoracion_agrupacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA_CMB_EDIT_GRAL_SUCURSAL_VALORACION_AGRUPACION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_valoracion_agrupacion_id" clase_id="gral_sucursal_valoracion_agrupacion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_valoracion_agrupacion_id" <?php echo ($gral_sucursal_valoracion->getGralSucursalValoracionAgrupacionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_valoracion_agrupacion_id" clase_id="gral_sucursal_valoracion_agrupacion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_valoracion_agrupacion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_valoracion_agrupacion_id', Gral::getCmbFiltro(GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacionsCmb(true), '...'), $gral_sucursal_valoracion->getGralSucursalValoracionAgrupacionId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_valoracion_agrupacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_valoracion_agrupacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_valoracion_agrupacion_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_valoracion_agrupacion_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_valoracion_agrupacion_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sucursal_valoracion_tipo_item_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_tipo_item_id' ?>" >

                    <?php Lang::_lang('GralSucursalValoracionTipoItem', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=gral_sucursal_valoracion_tipo_item_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_valoracion_tipo_item_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_valoracion_tipo_item_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA_CMB_EDIT_GRAL_SUCURSAL_VALORACION_TIPO_ITEM')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_valoracion_tipo_item_id" clase_id="gral_sucursal_valoracion_tipo_item" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_valoracion_tipo_item_id" <?php echo ($gral_sucursal_valoracion->getGralSucursalValoracionTipoItemId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_valoracion_tipo_item_id" clase_id="gral_sucursal_valoracion_tipo_item" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_valoracion_tipo_item_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_valoracion_tipo_item_id', Gral::getCmbFiltro(GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItemsCmb(true), '...'), $gral_sucursal_valoracion->getGralSucursalValoracionTipoItemId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_tipo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_valoracion_tipo_item_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_valoracion_tipo_item_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_valoracion_tipo_item_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_valoracion_tipo_item_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_valoracion_tipo_item_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_valoracion_tipo_item_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_apellido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >

                    <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=apellido' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_apellido" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_apellido' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getApellido()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_apellido_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_apellido_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_nombre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >

                    <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=nombre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_nombre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_nombre' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getNombre()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_nombre_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_nombre_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_email" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >

                    <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=email' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_email" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_email' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getEmail()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_email_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_email_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_telefono" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >

                    <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=telefono' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_telefono" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_telefono' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getTelefono()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_telefono_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_telefono_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >

                    <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=fecha' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($gral_sucursal_valoracion->getFecha())) ?>' size='40' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_fecha_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_fecha_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sucursal_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >

                    <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=gral_sucursal_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($gral_sucursal_valoracion->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $gral_sucursal_valoracion->getGralSucursalId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_gral_sucursal_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_valoracion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_valoracion' ?>" >

                    <?php Lang::_lang('Valoracion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=valoracion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_valoracion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('valoracion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_valoracion' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_valoracion' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getValoracion()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_valoracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_valoracion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_valoracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_valoracion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('valoracion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_valoracion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_valoracion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=gral_sucursal_valoracion_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='7' cols='60' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($gral_sucursal_valoracion->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/gral_sucursal_valoracion/gral_sucursal_valoracion_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($gral_sucursal_valoracion->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(GralSucursalValoracion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(GralSucursalValoracion::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($gral_sucursal_valoracion->getId()) != ''){ ?>
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

