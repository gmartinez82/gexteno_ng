<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_vendedor_valoracion_agrupacion';
$db_nombre_pagina = 'vta_vendedor_valoracion_agrupacion_alta';


$vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
    // if(trim($hdn_id) != '') $vta_vendedor_valoracion_agrupacion->setId($hdn_id, false);

    $vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($hdn_id);
    if(!$vta_vendedor_valoracion_agrupacion){
        $vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($vta_vendedor_valoracion_agrupacion){
            if(VtaVendedorValoracionAgrupacion::GEN_CONTROL_ALCANCE){
                if($vta_vendedor_valoracion_agrupacion->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=VtaVendedorValoracionAgrupacion&id='.$vta_vendedor_valoracion_agrupacion->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){ 
	$vta_vendedor_valoracion_agrupacion->setApellido(Gral::getVars(1, "txt_apellido"));
	$vta_vendedor_valoracion_agrupacion->setNombre(Gral::getVars(1, "txt_nombre"));
	$vta_vendedor_valoracion_agrupacion->setEmail(Gral::getVars(1, "txt_email"));
	$vta_vendedor_valoracion_agrupacion->setTelefono(Gral::getVars(1, "txt_telefono"));
	$vta_vendedor_valoracion_agrupacion->setFecha(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha")));
	$vta_vendedor_valoracion_agrupacion->setVtaVendedorId(Gral::getVars(1, "cmb_vta_vendedor_id", null));
	$vta_vendedor_valoracion_agrupacion->setValoracion(Gral::getVars(1, "txt_valoracion", 0));
	$vta_vendedor_valoracion_agrupacion->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $vta_vendedor_valoracion_agrupacion->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $vta_vendedor_valoracion_agrupacion->control();
                if(!$error->getExisteError()){
                    $vta_vendedor_valoracion_agrupacion->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$vta_vendedor_valoracion_agrupacion->getId().'&hash='.$vta_vendedor_valoracion_agrupacion->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $vta_vendedor_valoracion_agrupacion->control();
                if(!$error->getExisteError()){
                    $vta_vendedor_valoracion_agrupacion->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $vta_vendedor_valoracion_agrupacion->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($vta_vendedor_valoracion_agrupacion){
                if(VtaVendedorValoracionAgrupacion::GEN_CONTROL_ALCANCE){
                    if($vta_vendedor_valoracion_agrupacion->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=VtaVendedorValoracionAgrupacion&id='.$vta_vendedor_valoracion_agrupacion->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $vta_vendedor_valoracion_agrupacion->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $vta_vendedor_valoracion_agrupacion->setApellido(Gral::getVars(2, "apellido", ''));
            $vta_vendedor_valoracion_agrupacion->setNombre(Gral::getVars(2, "nombre", ''));
            $vta_vendedor_valoracion_agrupacion->setEmail(Gral::getVars(2, "email", ''));
            $vta_vendedor_valoracion_agrupacion->setTelefono(Gral::getVars(2, "telefono", ''));
            $vta_vendedor_valoracion_agrupacion->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
            $vta_vendedor_valoracion_agrupacion->setVtaVendedorId(Gral::getVars(2, "vta_vendedor_id", 'null'));
            $vta_vendedor_valoracion_agrupacion->setValoracion(Gral::getVars(2, "valoracion", 0));
            $vta_vendedor_valoracion_agrupacion->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
            $vta_vendedor_valoracion_agrupacion->setSession(Gral::getVars(2, "session", ''));
            $vta_vendedor_valoracion_agrupacion->setNavegador(Gral::getVars(2, "navegador", ''));
            $vta_vendedor_valoracion_agrupacion->setIp(Gral::getVars(2, "ip", ''));
            $vta_vendedor_valoracion_agrupacion->setObservacion(Gral::getVars(2, "observacion", ''));
            $vta_vendedor_valoracion_agrupacion->setOrden(Gral::getVars(2, "orden", 0));
            $vta_vendedor_valoracion_agrupacion->setEstado(Gral::getVars(2, "estado", 0));
            $vta_vendedor_valoracion_agrupacion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $vta_vendedor_valoracion_agrupacion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $vta_vendedor_valoracion_agrupacion->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $vta_vendedor_valoracion_agrupacion->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='vta_vendedor_valoracion_agrupacion' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaVendedorValoracionAgrupacions') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaVendedorValoracionAgrupacion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaVendedorValoracionAgrupacion::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_vendedor_valoracion_agrupacion'>
        
            <tr>
                <td id="label_txt_apellido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >

                    <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=apellido' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_apellido" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_apellido' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getApellido()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_apellido_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_apellido_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_nombre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >

                    <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=nombre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_nombre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_nombre' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getNombre()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_nombre_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_nombre_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_email" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_email' ?>" >

                    <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=email' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_email" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('email')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_email' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_email' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getEmail()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_email', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_email', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('email')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_email_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_email_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_telefono" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_telefono' ?>" >

                    <?php Lang::_lang('Telefono', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=telefono' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_telefono" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('telefono')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_telefono' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getTelefono()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_telefono', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('telefono')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_telefono_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_telefono_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >

                    <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=fecha' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> datetime' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_vendedor_valoracion_agrupacion->getFecha())) ?>' size='40' autocomplete='off' />
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
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_fecha_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_fecha_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_vendedor_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_vendedor_id' ?>" >

                    <?php Lang::_lang('VtaVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=vta_vendedor_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_vendedor_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ALTA_CMB_EDIT_VTA_VENDEDOR')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_vendedor_id" <?php echo ($vta_vendedor_valoracion_agrupacion->getVtaVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_vendedor_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(true), '...'), $vta_vendedor_valoracion_agrupacion->getVtaVendedorId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_vta_vendedor_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_vta_vendedor_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_valoracion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_valoracion' ?>" >

                    <?php Lang::_lang('Valoracion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=valoracion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_valoracion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('valoracion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_valoracion' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_valoracion' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getValoracion()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_valoracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_valoracion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_valoracion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_valoracion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('valoracion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_valoracion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_valoracion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_vendedor_valoracion_agrupacion_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='7' cols='60' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/vta_vendedor_valoracion_agrupacion/vta_vendedor_valoracion_agrupacion_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($vta_vendedor_valoracion_agrupacion->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaVendedorValoracionAgrupacion::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaVendedorValoracionAgrupacion::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($vta_vendedor_valoracion_agrupacion->getId()) != ''){ ?>
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

