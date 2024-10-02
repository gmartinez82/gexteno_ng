<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_orden_trabajo_operacion_estado';
$db_nombre_pagina = 'prd_orden_trabajo_operacion_estado_alta';


$prd_orden_trabajo_operacion_estado = new PrdOrdenTrabajoOperacionEstado();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $prd_orden_trabajo_operacion_estado = new PrdOrdenTrabajoOperacionEstado();
    // if(trim($hdn_id) != '') $prd_orden_trabajo_operacion_estado->setId($hdn_id, false);

    $prd_orden_trabajo_operacion_estado = PrdOrdenTrabajoOperacionEstado::getOxId($hdn_id);
    if(!$prd_orden_trabajo_operacion_estado){
        $prd_orden_trabajo_operacion_estado = new PrdOrdenTrabajoOperacionEstado();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($prd_orden_trabajo_operacion_estado){
            if(PrdOrdenTrabajoOperacionEstado::GEN_CONTROL_ALCANCE){
                if($prd_orden_trabajo_operacion_estado->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=PrdOrdenTrabajoOperacionEstado&id='.$prd_orden_trabajo_operacion_estado->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA')){ 
	$prd_orden_trabajo_operacion_estado->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionId(Gral::getVars(1, "cmb_prd_orden_trabajo_operacion_id", null));
	$prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionTipoEstadoId(Gral::getVars(1, "cmb_prd_orden_trabajo_operacion_tipo_estado_id", null));
	$prd_orden_trabajo_operacion_estado->setCodigo(Gral::getVars(1, "txt_codigo"));
	$prd_orden_trabajo_operacion_estado->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $prd_orden_trabajo_operacion_estado->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $prd_orden_trabajo_operacion_estado->control();
                if(!$error->getExisteError()){
                    $prd_orden_trabajo_operacion_estado->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$prd_orden_trabajo_operacion_estado->getId().'&hash='.$prd_orden_trabajo_operacion_estado->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $prd_orden_trabajo_operacion_estado->control();
                if(!$error->getExisteError()){
                    $prd_orden_trabajo_operacion_estado->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $prd_orden_trabajo_operacion_estado->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($prd_orden_trabajo_operacion_estado){
                if(PrdOrdenTrabajoOperacionEstado::GEN_CONTROL_ALCANCE){
                    if($prd_orden_trabajo_operacion_estado->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=PrdOrdenTrabajoOperacionEstado&id='.$prd_orden_trabajo_operacion_estado->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $prd_orden_trabajo_operacion_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionId(Gral::getVars(2, "prd_orden_trabajo_operacion_id", 'null'));
            $prd_orden_trabajo_operacion_estado->setPrdOrdenTrabajoOperacionTipoEstadoId(Gral::getVars(2, "prd_orden_trabajo_operacion_tipo_estado_id", 'null'));
            $prd_orden_trabajo_operacion_estado->setInicial(Gral::getVars(2, "inicial", 0));
            $prd_orden_trabajo_operacion_estado->setActual(Gral::getVars(2, "actual", 0));
            $prd_orden_trabajo_operacion_estado->setCodigo(Gral::getVars(2, "codigo", ''));
            $prd_orden_trabajo_operacion_estado->setObservacion(Gral::getVars(2, "observacion", ''));
            $prd_orden_trabajo_operacion_estado->setOrden(Gral::getVars(2, "orden", 0));
            $prd_orden_trabajo_operacion_estado->setEstado(Gral::getVars(2, "estado", 0));
            $prd_orden_trabajo_operacion_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $prd_orden_trabajo_operacion_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $prd_orden_trabajo_operacion_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $prd_orden_trabajo_operacion_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='prd_orden_trabajo_operacion_estado' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdOrdenTrabajoOperacionEstados') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdOrdenTrabajoOperacionEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdOrdenTrabajoOperacionEstado::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_prd_orden_trabajo_operacion_estado'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_operacion_estado_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion_estado->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_orden_trabajo_operacion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_id' ?>" >

                    <?php Lang::_lang('PrdOrdenTrabajo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_operacion_estado_alta&atributo=prd_orden_trabajo_operacion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_orden_trabajo_operacion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_operacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_OPERACION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_orden_trabajo_operacion_id" clase_id="prd_orden_trabajo_operacion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_operacion_id" <?php echo ($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_orden_trabajo_operacion_id" clase_id="prd_orden_trabajo_operacion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_orden_trabajo_operacion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_orden_trabajo_operacion_id', Gral::getCmbFiltro(PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacionsCmb(true), '...'), $prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_operacion_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_prd_orden_trabajo_operacion_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_prd_orden_trabajo_operacion_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_prd_orden_trabajo_operacion_tipo_estado_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id' ?>" >

                    <?php Lang::_lang('PrdOrdenTrabajoOperacionTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_operacion_estado_alta&atributo=prd_orden_trabajo_operacion_tipo_estado_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_prd_orden_trabajo_operacion_tipo_estado_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('prd_orden_trabajo_operacion_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ALTA_CMB_EDIT_PRD_ORDEN_TRABAJO_OPERACION_TIPO_ESTADO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_prd_orden_trabajo_operacion_tipo_estado_id" clase_id="prd_orden_trabajo_operacion_tipo_estado" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prd_orden_trabajo_operacion_tipo_estado_id" <?php echo ($prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_prd_orden_trabajo_operacion_tipo_estado_id" clase_id="prd_orden_trabajo_operacion_tipo_estado" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_prd_orden_trabajo_operacion_tipo_estado_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_prd_orden_trabajo_operacion_tipo_estado_id', Gral::getCmbFiltro(PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstadosCmb(true), '...'), $prd_orden_trabajo_operacion_estado->getPrdOrdenTrabajoOperacionTipoEstadoId(), 'textbox  '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_prd_orden_trabajo_operacion_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prd_orden_trabajo_operacion_tipo_estado_id')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_prd_orden_trabajo_operacion_tipo_estado_id_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_prd_orden_trabajo_operacion_tipo_estado_id_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_operacion_estado_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion_estado->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=prd_orden_trabajo_operacion_estado_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($prd_orden_trabajo_operacion_estado->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/prd_orden_trabajo_operacion_estado/prd_orden_trabajo_operacion_estado_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion_estado->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($prd_orden_trabajo_operacion_estado->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PrdOrdenTrabajoOperacionEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PrdOrdenTrabajoOperacionEstado::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($prd_orden_trabajo_operacion_estado->getId()) != ''){ ?>
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

