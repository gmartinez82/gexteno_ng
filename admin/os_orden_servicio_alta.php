<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'os_orden_servicio';
$db_nombre_pagina = 'os_orden_servicio_alta';


$os_orden_servicio = new OsOrdenServicio();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id', 0, Gral::TIPO_INTEGER);
    $hdn_hash = Gral::getVars(1, 'hdn_hash', '-', Gral::TIPO_STRING);

    $btn_guardar = Gral::getVars(1, 'btn_guardar', '', Gral::TIPO_STRING);
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo', '', Gral::TIPO_STRING);

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $os_orden_servicio = new OsOrdenServicio();
    // if(trim($hdn_id) != '') $os_orden_servicio->setId($hdn_id, false);

    $os_orden_servicio = OsOrdenServicio::getOxId($hdn_id);
    if(!$os_orden_servicio){
        $os_orden_servicio = new OsOrdenServicio();
    }else{
        // -----------------------------------------------------------------
        // se valida el hash del registro
        // -----------------------------------------------------------------
        if($os_orden_servicio){
            if(OsOrdenServicio::GEN_CONTROL_ALCANCE){
                if($os_orden_servicio->getHash() != $hdn_hash){

                    header('Location: us_noautorizado.php?tipo=HASH&clase=OsOrdenServicio&id='.$os_orden_servicio->getId().'&cod='.$hdn_hash);
                    exit;
                }
            }            
        }            
    }
    if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA')){ 
	$os_orden_servicio->setNotificacion(Gral::getVars(1, "txa_notificacion"));
	$os_orden_servicio->setNotificacionMecano(Gral::getVars(1, "cmb_notificacion_mecano", 0));
	$os_orden_servicio->setFecha(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha")));
	$os_orden_servicio->setFechaHecho(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_hecho")));
	$os_orden_servicio->setFechaNotificacion(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_notificacion")));
	$os_orden_servicio->setFechaLimiteDescargo(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_limite_descargo")));
	$os_orden_servicio->setFechaDescargo(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_descargo")));
	$os_orden_servicio->setFechaNotificadoSinDescargo(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_notificado_sin_descargo")));
	$os_orden_servicio->setFechaLimiteResolucion(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_limite_resolucion")));
	$os_orden_servicio->setFechaResolucion(Gral::getFechaToDb(Gral::getVars(1, "txt_fecha_resolucion")));
	$os_orden_servicio->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$os_orden_servicio->setCodigo(Gral::getVars(1, "txt_codigo"));
	$os_orden_servicio->setObservacion(Gral::getVars(1, "txa_observacion"));
    }
    if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA_AVANZADA')){ 
    }
    

	if($hdn_id == 0){
            $os_orden_servicio->setEstado(1);
	}
	
	switch($accion){
            case 'guardar':
                $error = $os_orden_servicio->control();
                if(!$error->getExisteError()){
                    $os_orden_servicio->saveDesdeBackend();				
                        				
                    header('Location: ?cs=1&id='.$os_orden_servicio->getId().'&hash='.$os_orden_servicio->getHash());
                    exit;
                }
            break;
            case 'guardarnvo':
                $error = $os_orden_servicio->control();
                if(!$error->getExisteError()){
                    $os_orden_servicio->saveDesdeBackend();
                        
                    header('Location: ?cs=1');
                    exit;
                }
            break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id', 0, Gral::TIPO_INTEGER);
	if(trim($hdn_id) != 0){ 
            $os_orden_servicio->setId($hdn_id);
                
            // -----------------------------------------------------------------
            // se valida el hash del registro
            // -----------------------------------------------------------------
            $hash = Gral::getVars(2, 'hash', '-', Gral::TIPO_STRING);
            if($os_orden_servicio){
                if(OsOrdenServicio::GEN_CONTROL_ALCANCE){
                    if($os_orden_servicio->getHash() != $hash){

                        header('Location: us_noautorizado.php?tipo=HASH&clase=OsOrdenServicio&id='.$os_orden_servicio->getId().'&cod='.$hash);
                        exit;
                    }
                }
            }            

	}else{
	
            $os_orden_servicio->setOsTipoId(Gral::getVars(2, "os_tipo_id", 'null'));
            $os_orden_servicio->setPerPersonaId(Gral::getVars(2, "per_persona_id", 'null'));
            $os_orden_servicio->setOsPrioridadId(Gral::getVars(2, "os_prioridad_id", 'null'));
            $os_orden_servicio->setOsTipoEstadoId(Gral::getVars(2, "os_tipo_estado_id", 'null'));
            $os_orden_servicio->setNotificacion(Gral::getVars(2, "notificacion", ''));
            $os_orden_servicio->setNotificacionMecano(Gral::getVars(2, "notificacion_mecano", 0));
            $os_orden_servicio->setFecha(Gral::getVars(2, "fecha", date('Y-m-d')));
            $os_orden_servicio->setFechaHecho(Gral::getVars(2, "fecha_hecho", date('Y-m-d')));
            $os_orden_servicio->setFechaNotificacion(Gral::getVars(2, "fecha_notificacion", date('Y-m-d')));
            $os_orden_servicio->setDiasParaDescargo(Gral::getVars(2, "dias_para_descargo", 0));
            $os_orden_servicio->setFechaLimiteDescargo(Gral::getVars(2, "fecha_limite_descargo", date('Y-m-d')));
            $os_orden_servicio->setFechaDescargo(Gral::getVars(2, "fecha_descargo", date('Y-m-d')));
            $os_orden_servicio->setFechaNotificadoSinDescargo(Gral::getVars(2, "fecha_notificado_sin_descargo", date('Y-m-d')));
            $os_orden_servicio->setFechaLimiteResolucion(Gral::getVars(2, "fecha_limite_resolucion", date('Y-m-d')));
            $os_orden_servicio->setFechaResolucion(Gral::getVars(2, "fecha_resolucion", date('Y-m-d')));
            $os_orden_servicio->setDescripcion(Gral::getVars(2, "descripcion", ''));
            $os_orden_servicio->setCodigo(Gral::getVars(2, "codigo", ''));
            $os_orden_servicio->setObservacion(Gral::getVars(2, "observacion", ''));
            $os_orden_servicio->setOrden(Gral::getVars(2, "orden", 0));
            $os_orden_servicio->setEstado(Gral::getVars(2, "estado", 0));
            $os_orden_servicio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
            $os_orden_servicio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
            $os_orden_servicio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
            $os_orden_servicio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    <form id='formu' name='formu' method='post' action='' modulo='os_orden_servicio' >
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('OsOrdenServicio') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(OsOrdenServicio::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(OsOrdenServicio::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_os_orden_servicio'>
        
            <tr>
                <td id="label_txa_notificacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_notificacion' ?>" >

                    <?php Lang::_lang('Notificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=notificacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_notificacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('notificacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_notificacion' rows='10' cols='50' id='txa_notificacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($os_orden_servicio->getNotificacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_notificacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_notificacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notificacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_notificacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_notificacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_notificacion_mecano" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_notificacion_mecano' ?>" >

                    <?php Lang::_lang('Not Mec', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=notificacion_mecano' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_notificacion_mecano" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('notificacion_mecano')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_notificacion_mecano', GralSiNo::getGralSiNosCmb(), $os_orden_servicio->getNotificacionMecano(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_notificacion_mecano', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_notificacion_mecano', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_notificacion_mecano', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_notificacion_mecano', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('notificacion_mecano')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_notificacion_mecano_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_notificacion_mecano_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha' ?>" >

                    <?php Lang::_lang('Fecha', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFecha())) ?>' size='10' autocomplete='off' />
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
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_hecho" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_hecho' ?>" >

                    <?php Lang::_lang('Fecha Hecho', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_hecho' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_hecho" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_hecho')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_hecho' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_hecho' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_hecho' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_hecho', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_hecho'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_hecho', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_hecho', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_hecho', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_hecho', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_hecho')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_hecho_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_hecho_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_notificacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_notificacion' ?>" >

                    <?php Lang::_lang('Fecha Notif', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_notificacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_notificacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_notificacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_notificacion' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_notificacion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_notificacion' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_notificacion', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_notificacion'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_notificacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_notificacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_notificacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_notificacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_notificacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_notificacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_limite_descargo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_limite_descargo' ?>" >

                    <?php Lang::_lang('Fecha Limite Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_limite_descargo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_limite_descargo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_limite_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_limite_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_limite_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_limite_descargo' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_limite_descargo', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_limite_descargo'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_limite_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_limite_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_limite_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_limite_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_limite_descargo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_limite_descargo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_limite_descargo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_descargo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_descargo' ?>" >

                    <?php Lang::_lang('Fecha Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_descargo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_descargo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_descargo' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_descargo', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_descargo'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_descargo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_descargo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_descargo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_notificado_sin_descargo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo' ?>" >

                    <?php Lang::_lang('Fecha Noti sin Descargo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_notificado_sin_descargo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_notificado_sin_descargo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_notificado_sin_descargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_notificado_sin_descargo' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_notificado_sin_descargo' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificadoSinDescargo())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_notificado_sin_descargo' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_notificado_sin_descargo', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_notificado_sin_descargo'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_notificado_sin_descargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_notificado_sin_descargo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_notificado_sin_descargo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_notificado_sin_descargo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_limite_resolucion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_limite_resolucion' ?>" >

                    <?php Lang::_lang('Fecha Limite Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_limite_resolucion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_limite_resolucion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_limite_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_limite_resolucion' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_limite_resolucion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_limite_resolucion' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_limite_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_limite_resolucion'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_limite_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_limite_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_limite_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_limite_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_limite_resolucion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_limite_resolucion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_limite_resolucion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_fecha_resolucion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_fecha_resolucion' ?>" >

                    <?php Lang::_lang('Fecha Resolucion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=fecha_resolucion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_fecha_resolucion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_fecha_resolucion' type='text' class='textbox <?php echo $error_input_css ?> date' id='txt_fecha_resolucion' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion())) ?>' size='10' autocomplete='off' />
                    <input type='button' id='cal_txt_fecha_resolucion' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_resolucion', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_resolucion'
                        });
                    </script>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_resolucion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_fecha_resolucion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('fecha_resolucion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_resolucion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_fecha_resolucion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($os_orden_servicio->getDescripcion()) ?>' size='50' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_descripcion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_descripcion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($os_orden_servicio->getCodigo()) ?>' size='40' autocomplete='off' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_codigo_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_codigo_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=os_orden_servicio_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($os_orden_servicio->getObservacion()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>
                    
                <?php 
                if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_observacion_dato_html_bottom.php")){
                    include Gral::getPathAbs()."admin/ajax/modulos/os_orden_servicio/os_orden_servicio_alta_campo_observacion_dato_html_bottom.php";
                }
                ?>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'>
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_orden_servicio->getId()) ?>'/>
            <input name='hdn_hash' type='hidden' id='hdn_hash' size='5' value='<?php Gral::_echoTxt($os_orden_servicio->getHash()) ?>'/>
              

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(OsOrdenServicio::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(OsOrdenServicio::getInfoBtnVolver('url')) ?>"' />			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($os_orden_servicio->getId()) != ''){ ?>
    <div class="alta relaciones">
		
        <div class="imagenes">
            <div class="titulo"><?php Lang::_lang('OsOrdenServicioImagens') ?></div>
            <div class="datos">
                <?php
                $imagenes = $os_orden_servicio->getOsOrdenServicioImagens();
                if(count($imagenes) > 0){ 
                ?>
                    <div class="imagen <?php echo (count($imagenes) > 3) ? 'slide' : '' ?>">
                        <?php foreach($imagenes as $imagen){ ?>
                            <a href="<?php echo $imagen->getPathImagen() ?>" rel="os_orden_servicio_<?php echo $os_orden_servicio->getId() ?>" title="<?php echo $imagen->getDescripcion() ?>">
                                <img class="imagen" src="<?php echo $imagen->getPathImagen(true) ?>" width="120" alt="imagen" />
                            </a>
                        <?php } ?>
                    </div>
                <?php }else{ ?>
                    <div class="comentario"><?php Lang::_lang('No existen aun imagenes cargadas') ?></div>
                <?php } ?>
            </div>
            <div class="link"><a href='os_orden_servicio_imagen_gestor.php?id=<?php echo $os_orden_servicio->getId() ?>'><?php Lang::_lang('Ir al Gestor de Imagenes') ?></a></div>
        </div>
		
        <div class="archivos">
            <div class="titulo"><?php Lang::_lang('OsOrdenServicioArchivos') ?></div>
            <div class="datos">
            <?php
            $archivos = $os_orden_servicio->getOsOrdenServicioArchivos();
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
            <div class="link"><a href='os_orden_servicio_archivo_gestor.php?id=<?php echo $os_orden_servicio->getId() ?>'><?php Lang::_lang('Ir al Gestor de Archivos') ?></a></div>
        </div>
		
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

