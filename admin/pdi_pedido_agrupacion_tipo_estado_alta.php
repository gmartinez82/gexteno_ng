<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido_agrupacion_tipo_estado';
$db_nombre_pagina = 'pdi_pedido_agrupacion_tipo_estado_alta';


$pdi_pedido_agrupacion_tipo_estado = new PdiPedidoAgrupacionTipoEstado();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $pdi_pedido_agrupacion_tipo_estado = new PdiPedidoAgrupacionTipoEstado();
    if(trim($hdn_id) != '') $pdi_pedido_agrupacion_tipo_estado->setId($hdn_id, false);
	$pdi_pedido_agrupacion_tipo_estado->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$pdi_pedido_agrupacion_tipo_estado->setCodigo(Gral::getVars(1, "txt_codigo"));
	$pdi_pedido_agrupacion_tipo_estado->setActivo(Gral::getVars(1, "cmb_activo", 0));
	$pdi_pedido_agrupacion_tipo_estado->setTerminal(Gral::getVars(1, "cmb_terminal", 0));
	$pdi_pedido_agrupacion_tipo_estado->setColor(Gral::getVars(1, "txt_color"));
	$pdi_pedido_agrupacion_tipo_estado->setObservacion(Gral::getVars(1, "txa_observacion"));
	$pdi_pedido_agrupacion_tipo_estado->setOrden(Gral::getVars(1, "txt_orden", 0));
	$pdi_pedido_agrupacion_tipo_estado->setEstado(Gral::getVars(1, "_estado", 0));
	$pdi_pedido_agrupacion_tipo_estado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$pdi_pedido_agrupacion_tipo_estado->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$pdi_pedido_agrupacion_tipo_estado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$pdi_pedido_agrupacion_tipo_estado->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$pdi_pedido_agrupacion_tipo_estado_estado = new PdiPedidoAgrupacionTipoEstado();
	if(trim($hdn_id) != ''){
            $pdi_pedido_agrupacion_tipo_estado_estado->setId($hdn_id);            
            $pdi_pedido_agrupacion_tipo_estado->setEstado($pdi_pedido_agrupacion_tipo_estado_estado->getEstado());
	}else{            
            $pdi_pedido_agrupacion_tipo_estado->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $pdi_pedido_agrupacion_tipo_estado->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion_tipo_estado->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$pdi_pedido_agrupacion_tipo_estado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pdi_pedido_agrupacion_tipo_estado->control();
			if(!$error->getExisteError()){
				$pdi_pedido_agrupacion_tipo_estado->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$pdi_pedido_agrupacion_tipo_estado->setId($hdn_id);
	}else{
	
	$pdi_pedido_agrupacion_tipo_estado->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pdi_pedido_agrupacion_tipo_estado->setCodigo(Gral::getVars(2, "codigo", ''));
	$pdi_pedido_agrupacion_tipo_estado->setActivo(Gral::getVars(2, "activo", 0));
	$pdi_pedido_agrupacion_tipo_estado->setTerminal(Gral::getVars(2, "terminal", 0));
	$pdi_pedido_agrupacion_tipo_estado->setColor(Gral::getVars(2, "color", ''));
	$pdi_pedido_agrupacion_tipo_estado->setObservacion(Gral::getVars(2, "observacion", ''));
	$pdi_pedido_agrupacion_tipo_estado->setOrden(Gral::getVars(2, "orden", 0));
	$pdi_pedido_agrupacion_tipo_estado->setEstado(Gral::getVars(2, "estado", 0));
	$pdi_pedido_agrupacion_tipo_estado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion_tipo_estado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pdi_pedido_agrupacion_tipo_estado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pdi_pedido_agrupacion_tipo_estado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiPedidoAgrupacionTipoEstados') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdiPedidoAgrupacionTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdiPedidoAgrupacionTipoEstado::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_pdi_pedido_agrupacion_tipo_estado'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_tipo_estado->getDescripcion()) ?>' size='50' />

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
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_tipo_estado->getCodigo()) ?>' size='40' />

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
                <td id="label_cmb_activo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_activo' ?>" >

                    <?php Lang::_lang('Activo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=activo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_activo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('activo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_activo', GralSiNo::getGralSiNosCmb(), $pdi_pedido_agrupacion_tipo_estado->getActivo(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_activo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_activo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_activo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('activo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_terminal" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_terminal' ?>" >

                    <?php Lang::_lang('Terminal', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=terminal' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_terminal" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('terminal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_terminal', GralSiNo::getGralSiNosCmb(), $pdi_pedido_agrupacion_tipo_estado->getTerminal(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_terminal', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_terminal', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_terminal', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('terminal')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_color" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_color' ?>" >

                    <?php Lang::_lang('Color', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=color' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_color" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('color')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_color' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_color' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_tipo_estado->getColor()) ?>' size='50' />

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
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=pdi_pedido_agrupacion_tipo_estado_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($pdi_pedido_agrupacion_tipo_estado->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pdi_pedido_agrupacion_tipo_estado->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(PdiPedidoAgrupacionTipoEstado::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(PdiPedidoAgrupacionTipoEstado::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($pdi_pedido_agrupacion_tipo_estado->getId()) != ''){ ?>
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

