<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_cliente_ins_tipo_lista_precio';
$db_nombre_pagina = 'cli_cliente_ins_tipo_lista_precio_alta';


$cli_cliente_ins_tipo_lista_precio = new CliClienteInsTipoListaPrecio();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $cli_cliente_ins_tipo_lista_precio = new CliClienteInsTipoListaPrecio();
    if(trim($hdn_id) != '') $cli_cliente_ins_tipo_lista_precio->setId($hdn_id, false);
	$cli_cliente_ins_tipo_lista_precio->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$cli_cliente_ins_tipo_lista_precio->setCliClienteId(Gral::getVars(1, "cmb_cli_cliente_id", null));
	$cli_cliente_ins_tipo_lista_precio->setInsTipoListaPrecioId(Gral::getVars(1, "cmb_ins_tipo_lista_precio_id", null));
	$cli_cliente_ins_tipo_lista_precio->setPredeterminado(Gral::getVars(1, "cmb_predeterminado", 0));
	$cli_cliente_ins_tipo_lista_precio->setCodigo(Gral::getVars(1, "txt_codigo"));
	$cli_cliente_ins_tipo_lista_precio->setObservacion(Gral::getVars(1, "txa_observacion"));
	$cli_cliente_ins_tipo_lista_precio->setOrden(Gral::getVars(1, "txt_orden", 0));
	$cli_cliente_ins_tipo_lista_precio->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$cli_cliente_ins_tipo_lista_precio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$cli_cliente_ins_tipo_lista_precio->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$cli_cliente_ins_tipo_lista_precio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$cli_cliente_ins_tipo_lista_precio->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$cli_cliente_ins_tipo_lista_precio_estado = new CliClienteInsTipoListaPrecio();
	if(trim($hdn_id) != ''){
            $cli_cliente_ins_tipo_lista_precio_estado->setId($hdn_id);            
            $cli_cliente_ins_tipo_lista_precio->setEstado($cli_cliente_ins_tipo_lista_precio_estado->getEstado());
	}else{            
            $cli_cliente_ins_tipo_lista_precio->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $cli_cliente_ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$cli_cliente_ins_tipo_lista_precio->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$cli_cliente_ins_tipo_lista_precio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cli_cliente_ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$cli_cliente_ins_tipo_lista_precio->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$cli_cliente_ins_tipo_lista_precio->setId($hdn_id);
	}else{
	
	$cli_cliente_ins_tipo_lista_precio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$cli_cliente_ins_tipo_lista_precio->setCliClienteId(Gral::getVars(2, "cli_cliente_id", 'null'));
	$cli_cliente_ins_tipo_lista_precio->setInsTipoListaPrecioId(Gral::getVars(2, "ins_tipo_lista_precio_id", 'null'));
	$cli_cliente_ins_tipo_lista_precio->setPredeterminado(Gral::getVars(2, "predeterminado", 0));
	$cli_cliente_ins_tipo_lista_precio->setCodigo(Gral::getVars(2, "codigo", ''));
	$cli_cliente_ins_tipo_lista_precio->setObservacion(Gral::getVars(2, "observacion", ''));
	$cli_cliente_ins_tipo_lista_precio->setOrden(Gral::getVars(2, "orden", 0));
	$cli_cliente_ins_tipo_lista_precio->setEstado(Gral::getVars(2, "estado", 0));
	$cli_cliente_ins_tipo_lista_precio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cli_cliente_ins_tipo_lista_precio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cli_cliente_ins_tipo_lista_precio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cli_cliente_ins_tipo_lista_precio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('CliClienteInsTipoListaPrecio') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliClienteInsTipoListaPrecio::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliClienteInsTipoListaPrecio::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_cli_cliente_ins_tipo_lista_precio'>
        
            <tr>
                <td id="label_cmb_cli_cliente_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cli_cliente_id' ?>" >

                    <?php Lang::_lang('CliCliente', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_ins_tipo_lista_precio_alta&atributo=cli_cliente_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_cli_cliente_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_ALTA_CMB_EDIT_CLI_CLIENTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cli_cliente_id" <?php echo ($cli_cliente_ins_tipo_lista_precio->getCliClienteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_cli_cliente_id" clase_id="cli_cliente" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_cli_cliente_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cli_cliente_ins_tipo_lista_precio->getCliClienteId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cli_cliente_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cli_cliente_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_tipo_lista_precio_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id' ?>" >

                    <?php Lang::_lang('InsTipoListaPrecio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_ins_tipo_lista_precio_alta&atributo=ins_tipo_lista_precio_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_tipo_lista_precio_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_ALTA_CMB_EDIT_INS_TIPO_LISTA_PRECIO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_lista_precio_id" <?php echo ($cli_cliente_ins_tipo_lista_precio->getInsTipoListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_tipo_lista_precio_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), $cli_cliente_ins_tipo_lista_precio->getInsTipoListaPrecioId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_predeterminado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_predeterminado' ?>" >

                    <?php Lang::_lang('Predeterminado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_ins_tipo_lista_precio_alta&atributo=predeterminado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_predeterminado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('predeterminado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_predeterminado', GralSiNo::getGralSiNosCmb(), $cli_cliente_ins_tipo_lista_precio->getPredeterminado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_predeterminado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_predeterminado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_predeterminado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('predeterminado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=cli_cliente_ins_tipo_lista_precio_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($cli_cliente_ins_tipo_lista_precio->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cli_cliente_ins_tipo_lista_precio->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(CliClienteInsTipoListaPrecio::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(CliClienteInsTipoListaPrecio::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($cli_cliente_ins_tipo_lista_precio->getId()) != ''){ ?>
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

