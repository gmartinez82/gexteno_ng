<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona';
$db_nombre_pagina = 'per_persona_alta';


$per_persona = new PerPersona();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $per_persona = new PerPersona();
    // if(trim($hdn_id) != '') $per_persona->setId($hdn_id, false);

    $per_persona = PerPersona::getOxId($hdn_id);
    if(!$per_persona){
        $per_persona = new PerPersona();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($per_persona){
            if(PerPersona::GEN_CONTROL_ALCANCE){
                if($per_persona->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PerPersona&id='.$per_persona->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA')){ 
	$per_persona->setLegajo(Gral::getVars(1, "txt_legajo"));
	$per_persona->setGralEmpresaId(Gral::getVars(1, "cmb_gral_empresa_id", null));
	$per_persona->setGralSucursalId(Gral::getVars(1, "cmb_gral_sucursal_id", null));
	$per_persona->setGralTipoDocumentoId(Gral::getVars(1, "cmb_gral_tipo_documento_id", null));
	$per_persona->setDocumento(Gral::getVars(1, "txt_documento"));
	$per_persona->setApellido(Gral::getVars(1, "txt_apellido"));
	$per_persona->setNombre(Gral::getVars(1, "txt_nombre"));
	$per_persona->setNacimiento(Gral::getFechaToDb(Gral::getVars(1, "txt_nacimiento")));
	$per_persona->setGralSexoId(Gral::getVars(1, "cmb_gral_sexo_id", null));
	$per_persona->setGeoLocalidadId(Gral::getVars(1, "cmb_geo_localidad_id", null));
	$per_persona->setCodigoPostal(Gral::getVars(1, "txt_codigo_postal"));
	$per_persona->setNacionalidad(Gral::getVars(1, "cmb_nacionalidad", null));
	$per_persona->setPerTipoEstadoId(Gral::getVars(1, "cmb_per_tipo_estado_id", null));
	$per_persona->setControlHorario(Gral::getVars(1, "cmb_control_horario", 0));
	$per_persona->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $per_persona->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $per_persona->control();
                if(!$error->getExisteError()){
                    $per_persona->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$per_persona->getId().'&hash='.$per_persona->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $per_persona->control();
                if(!$error->getExisteError()){
                    $per_persona->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $per_persona->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($per_persona){
                if(PerPersona::GEN_CONTROL_ALCANCE){
                    if($per_persona->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PerPersona&id='.$per_persona->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $per_persona->setLegajo(Gral::getVars(2, "legajo", ''));
            $per_persona->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $per_persona->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
            $per_persona->setGralSucursalId(Gral::getVars(2, "gral_sucursal_id", 'null'));
            $per_persona->setGralTipoDocumentoId(Gral::getVars(2, "gral_tipo_documento_id", 'null'));
            $per_persona->setDocumento(Gral::getVars(2, "documento", ''));
            $per_persona->setApellido(Gral::getVars(2, "apellido", ''));
            $per_persona->setNombre(Gral::getVars(2, "nombre", ''));
            $per_persona->setCuil(Gral::getVars(2, "cuil", ''));
            $per_persona->setNacimiento(Gral::getVars(2, "nacimiento", date('Y-m-d')));
            $per_persona->setGralSexoId(Gral::getVars(2, "gral_sexo_id", 'null'));
            $per_persona->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
            $per_persona->setCodigoPostal(Gral::getVars(2, "codigo_postal", ''));
            $per_persona->setFechaAlta(Gral::getVars(2, "fecha_alta", date('Y-m-d')));
            $per_persona->setFechaBaja(Gral::getVars(2, "fecha_baja", date('Y-m-d')));
            $per_persona->setNacionalidad(Gral::getVars(2, "nacionalidad", 'null'));
            $per_persona->setCodigo(Gral::getVars(2, "codigo", ''));
            $per_persona->setCodigoCredencial(Gral::getVars(2, "codigo_credencial", ''));
            $per_persona->setHash(Gral::getVars(2, "hash", ''));
            $per_persona->setPerTipoEstadoId(Gral::getVars(2, "per_tipo_estado_id", 'null'));
            $per_persona->setControlHorario(Gral::getVars(2, "control_horario", 0));
            $per_persona->setObservacion(Gral::getVars(2, "observacion", ''));
            $per_persona->setOrden(Gral::getVars(2, "orden", 0));
            $per_persona->setEstado(Gral::getVars(2, "estado", 0));
            $per_persona->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $per_persona->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $per_persona->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $per_persona->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='per_persona' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PerPersonas') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerPersona::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerPersona::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_per_persona'>
        
            <tr>
                <td id="label_txt_legajo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_legajo' ?>" >

                    <?php Lang::_lang('Legajo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=legajo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_legajo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('legajo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_legajo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_legajo' value='<?php Gral::_echoTxt($per_persona->getLegajo()) ?>' size='20' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_legajo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_legajo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_legajo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_legajo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('legajo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_legajo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_legajo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_empresa_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_empresa_id' ?>" >

                    <?php Lang::_lang('GralEmpresa', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=gral_empresa_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_empresa_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($per_persona->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_empresa_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $per_persona->getGralEmpresaId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_empresa_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_empresa_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_empresa_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_empresa_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sucursal_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sucursal_id' ?>" >

                    <?php Lang::_lang('GralSucursal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=gral_sucursal_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sucursal_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_SUCURSAL')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sucursal_id" <?php echo ($per_persona->getGralSucursalId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sucursal_id" clase_id="gral_sucursal" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sucursal_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $per_persona->getGralSucursalId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sucursal_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sucursal_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_sucursal_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_sucursal_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_tipo_documento_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_tipo_documento_id' ?>" >

                    <?php Lang::_lang('GralTipoDocumento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=gral_tipo_documento_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_tipo_documento_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_TIPO_DOCUMENTO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_documento_id" <?php echo ($per_persona->getGralTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_tipo_documento_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(true), '...'), $per_persona->getGralTipoDocumentoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_documento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_tipo_documento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_tipo_documento_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_tipo_documento_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_documento" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_documento' ?>" >

                    <?php Lang::_lang('Documento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=documento' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_documento" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_documento' value='<?php Gral::_echoTxt($per_persona->getDocumento()) ?>' size='20' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_documento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_documento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_documento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('documento')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_documento_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_documento_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_apellido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_apellido' ?>" >

                    <?php Lang::_lang('Apellido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=apellido' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_apellido" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> mayuscula' id='txt_apellido' value='<?php Gral::_echoTxt($per_persona->getApellido()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_apellido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_apellido_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_apellido_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_nombre" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nombre' ?>" >

                    <?php Lang::_lang('Nombre', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=nombre' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_nombre" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> mayuscula' id='txt_nombre' value='<?php Gral::_echoTxt($per_persona->getNombre()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nombre', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nombre_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nombre_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_nacimiento" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nacimiento' ?>" >

                    <?php Lang::_lang('Nacimiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=nacimiento' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_nacimiento" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nacimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_nacimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_nacimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($per_persona->getNacimiento())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_nacimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_nacimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_nacimiento'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nacimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nacimiento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nacimiento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nacimiento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nacimiento')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nacimiento_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nacimiento_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_gral_sexo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_gral_sexo_id' ?>" >

                    <?php Lang::_lang('GralSexo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=gral_sexo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_gral_sexo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('gral_sexo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_SEXO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_gral_sexo_id" clase_id="gral_sexo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sexo_id" <?php echo ($per_persona->getGralSexoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_gral_sexo_id" clase_id="gral_sexo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_gral_sexo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_gral_sexo_id', Gral::getCmbFiltro(GralSexo::getGralSexosCmb(true), '...'), $per_persona->getGralSexoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sexo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sexo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sexo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_gral_sexo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sexo_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_sexo_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_gral_sexo_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
                    <tr>
                        <td id="label_cmb_geo_pais_id" class='adm_carga_datos_titulos' width='' help="<?php echo 'help_'.$db_nombre_pagina.'_geo_pais_id' ?>" >

                            <?php Lang::_lang('GeoPais', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=geo_pais_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_pais_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
                    			if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_pais_id = $per_persona->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
                        $c = new Criterio(GeoPais::SES_CRITERIOS);
                        $c->add('geo_pais.x', $x, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_pais');
                        $c = GeoPais::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c), '...'), $cmb_geo_pais_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="x" elemento_id="cmb_geo_pais_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_PAIS')){ ?>			
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

                            <?php Lang::_lang('GeoProvincia', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=geo_provincia_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_provincia_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
                    			if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_provincia_id = $per_persona->getGeoLocalidad()->getGeoProvincia()->getId();			
                        $c = new Criterio(GeoProvincia::SES_CRITERIOS);
                        $c->add('geo_provincia.geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_provincia');
                        $c = GeoProvincia::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c), '...'), $cmb_geo_provincia_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>			
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

                            <?php Lang::_lang('GeoLocalidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                            <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                              <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=geo_localidad_id' modulo_metodo_init='setInit()'>
                                  <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                              </div>
                            <?php } ?>

                        </td>

                        <td id="dato_cmb_geo_localidad_id" class='adm_carga_datos_datos' width=''>

                          <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                          <?php
                              $cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
                    			if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_localidad_id = $per_persona->getGeoLocalidad()->getId();			
                        $c = new Criterio(GeoLocalidad::SES_CRITERIOS);
                        $c->add('geo_localidad.geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
                        $c->addOrden('descripcion', 'asc');
                        $c->addTabla('geo_localidad');
                        $c = GeoLocalidad::setAplicarFiltrosDeAlcance($c);
                        $c->setCriterios();
                        ?>

                        <?php Html::html_dib_select(1, 'cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c), '...'), $cmb_geo_localidad_id, 'textbox  combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>

                        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>			
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
                <td id="label_txt_codigo_postal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_postal' ?>" >

                    <?php Lang::_lang('Codigo Postal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=codigo_postal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo_postal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo_postal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo_postal' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo_postal' value='<?php Gral::_echoTxt($per_persona->getCodigoPostal()) ?>' size='10' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_postal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo_postal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_postal')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_codigo_postal_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_codigo_postal_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_nacionalidad" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_nacionalidad' ?>" >

                    <?php Lang::_lang('Nacionalidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=nacionalidad' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_nacionalidad" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('nacionalidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_nacionalidad', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(true), '...'), $per_persona->getNacionalidad(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nacionalidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nacionalidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_nacionalidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_nacionalidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nacionalidad')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nacionalidad_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_nacionalidad_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_per_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_per_tipo_estado_id' ?>" >

                    <?php Lang::_lang('PerTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=per_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_per_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('per_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_PER_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_per_tipo_estado_id" clase_id="per_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_tipo_estado_id" <?php echo ($per_persona->getPerTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_per_tipo_estado_id" clase_id="per_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_per_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_per_tipo_estado_id', Gral::getCmbFiltro(PerTipoEstado::getPerTipoEstadosCmb(true), '...'), $per_persona->getPerTipoEstadoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_per_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_per_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_per_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_per_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_tipo_estado_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_per_tipo_estado_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_per_tipo_estado_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_control_horario" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_control_horario' ?>" >

                    <?php Lang::_lang('Control Horario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=control_horario' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_control_horario" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('control_horario')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_control_horario', GralSiNo::getGralSiNosCmb(), $per_persona->getControlHorario(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_control_horario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_control_horario', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_control_horario', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_control_horario', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('control_horario')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_control_horario_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_control_horario_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=per_persona_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($per_persona->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/per_persona/per_persona_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_persona->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($per_persona->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PerPersona::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PerPersona::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($per_persona->getId()) != ''){ ?>
    <div class="alta relaciones">
		
        <div class="imagenes">
            <div class="titulo"><?php Lang::_lang('PerPersonaImagens') ?></div>
            <div class="datos">
                <?php
                $imagenes = $per_persona->getPerPersonaImagens();
                if(count($imagenes) > 0){ 
                ?>
                    <div class="imagen <?php echo (count($imagenes) > 3) ? 'slide' : '' ?>">
                        <?php foreach($imagenes as $imagen){ ?>
                            <a href="<?php echo $imagen->getPathImagen() ?>" rel="per_persona_<?php echo $per_persona->getId() ?>" title="<?php echo $imagen->getDescripcion() ?>">
                                <img class="imagen" src="<?php echo $imagen->getPathImagen(true) ?>" width="120" alt="imagen" />
                            </a>
                        <?php } ?>
                    </div>
                <?php }else{ ?>
                    <div class="comentario"><?php Lang::_lang('No existen aun imagenes cargadas') ?></div>
                <?php } ?>
            </div>
            <div class="link"><a href='per_persona_imagen_gestor.php?id=<?php echo $per_persona->getId() ?>'><?php Lang::_lang('Ir al Gestor de Imagenes') ?></a></div>
        </div>
		
        <div class="archivos">
            <div class="titulo"><?php Lang::_lang('PerPersonaArchivos') ?></div>
            <div class="datos">
            <?php
            $archivos = $per_persona->getPerPersonaArchivos();
            if(count($archivos) > 0){ 
            ?>
            <div class="<?php echo (count($archivos) > 3) ? 'slide' : '' ?>">
            	<?php foreach($archivos as $archivo){ ?>
                    <div class="uno">
                        <div class="icono">
                        <a href="<?php echo $archivo->getPathArchivo() ?>" target="_blank" title="<?php echo $archivo->getDescripcion() ?>">
                            <img class="archivo" src="<?php echo Gral::getPath('path_http').'archivos/archivos/iconos/btn_'.$archivo->getTipo() ?>.gif" width="25" alt="imagen" />
                        </a>
                        </div>
                        <div class="inform">
                            <label class="descripcion"><?php Gral::_echo(substr($archivo->getDescripcion(), 0, 10)) ?> ...</label>
                            <label class="observacion"><?php Gral::_echo(substr($archivo->getObservacion(), 0, 10)) ?> ...</label>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <?php }else{ ?>
                    <div class="comentario"><?php Lang::_lang('No existen aun archivos cargados') ?></div>
                <?php } ?>
            </div>
            <div class="link"><a href='per_persona_archivo_gestor.php?id=<?php echo $per_persona->getId() ?>'><?php Lang::_lang('Ir al Gestor de Archivos') ?></a></div>
        </div>
		
		<?php include Gral::getPathAbs()."admin/ajax/modulos/per_persona/bloque_relacion_per_persona_us_usuario.php" ?>
		<?php include Gral::getPathAbs()."admin/ajax/modulos/per_persona/bloque_vinculo_per_persona_gral_sucursal.php" ?>
    </div>
	<?php } ?>


	  <?php //include 'per_persona_set.php' ?>
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

