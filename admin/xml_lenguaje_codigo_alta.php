<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'xml_lenguaje_codigo';
$db_nombre_pagina = 'xml_lenguaje_codigo_alta';


$xml_lenguaje_codigo = new XmlLenguajeCodigo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $xml_lenguaje_codigo = new XmlLenguajeCodigo();
    if(trim($hdn_id) != '') $xml_lenguaje_codigo->setId($hdn_id, false);
	$xml_lenguaje_codigo->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$xml_lenguaje_codigo->setXmlLenguajeTipoId(Gral::getVars(1, "cmb_xml_lenguaje_tipo_id", null));
	$xml_lenguaje_codigo->setXmlLenguajePaginaId(Gral::getVars(1, "cmb_xml_lenguaje_pagina_id", null));
	$xml_lenguaje_codigo->setXmlLenguajeEntornoId(Gral::getVars(1, "cmb_xml_lenguaje_entorno_id", null));
	$xml_lenguaje_codigo->setCodigo(Gral::getVars(1, "txt_codigo"));
	$xml_lenguaje_codigo->setObservacion(Gral::getVars(1, "txa_observacion"));
	$xml_lenguaje_codigo->setOrden(Gral::getVars(1, "txt_orden", 0));
	$xml_lenguaje_codigo->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$xml_lenguaje_codigo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$xml_lenguaje_codigo->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$xml_lenguaje_codigo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$xml_lenguaje_codigo->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$xml_lenguaje_codigo_estado = new XmlLenguajeCodigo();
	if(trim($hdn_id) != ''){
            $xml_lenguaje_codigo_estado->setId($hdn_id);            
            $xml_lenguaje_codigo->setEstado($xml_lenguaje_codigo_estado->getEstado());
	}else{            
            $xml_lenguaje_codigo->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $xml_lenguaje_codigo->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_codigo->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$xml_lenguaje_codigo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $xml_lenguaje_codigo->control();
			if(!$error->getExisteError()){
				$xml_lenguaje_codigo->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$xml_lenguaje_codigo->setId($hdn_id);
	}else{
	
	$xml_lenguaje_codigo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$xml_lenguaje_codigo->setXmlLenguajeTipoId(Gral::getVars(2, "xml_lenguaje_tipo_id", 'null'));
	$xml_lenguaje_codigo->setXmlLenguajePaginaId(Gral::getVars(2, "xml_lenguaje_pagina_id", 'null'));
	$xml_lenguaje_codigo->setXmlLenguajeEntornoId(Gral::getVars(2, "xml_lenguaje_entorno_id", 'null'));
	$xml_lenguaje_codigo->setCodigo(Gral::getVars(2, "codigo", ''));
	$xml_lenguaje_codigo->setObservacion(Gral::getVars(2, "observacion", ''));
	$xml_lenguaje_codigo->setOrden(Gral::getVars(2, "orden", 0));
	$xml_lenguaje_codigo->setEstado(Gral::getVars(2, "estado", 0));
	$xml_lenguaje_codigo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$xml_lenguaje_codigo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$xml_lenguaje_codigo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$xml_lenguaje_codigo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('XmlLenguajeCodigo') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(XmlLenguajeCodigo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(XmlLenguajeCodigo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_xml_lenguaje_codigo'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_xml_lenguaje_tipo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id' ?>" >

                    <?php Lang::_lang('XmlLenguajeTipo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=xml_lenguaje_tipo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_xml_lenguaje_tipo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_tipo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_TIPO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_xml_lenguaje_tipo_id" clase_id="xml_lenguaje_tipo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_tipo_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajeTipoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_xml_lenguaje_tipo_id" clase_id="xml_lenguaje_tipo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_xml_lenguaje_tipo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_xml_lenguaje_tipo_id', Gral::getCmbFiltro(XmlLenguajeTipo::getXmlLenguajeTiposCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajeTipoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_tipo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_tipo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_xml_lenguaje_pagina_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id' ?>" >

                    <?php Lang::_lang('XmlLenguajePagina', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=xml_lenguaje_pagina_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_xml_lenguaje_pagina_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_pagina_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_PAGINA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_xml_lenguaje_pagina_id" clase_id="xml_lenguaje_pagina" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_pagina_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajePaginaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_xml_lenguaje_pagina_id" clase_id="xml_lenguaje_pagina" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_xml_lenguaje_pagina_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_xml_lenguaje_pagina_id', Gral::getCmbFiltro(XmlLenguajePagina::getXmlLenguajePaginasCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajePaginaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_pagina_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_pagina_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_xml_lenguaje_entorno_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id' ?>" >

                    <?php Lang::_lang('XmlLenguajeEntorno', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=xml_lenguaje_entorno_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_xml_lenguaje_entorno_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('xml_lenguaje_entorno_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ALTA_CMB_EDIT_XML_LENGUAJE_ENTORNO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_xml_lenguaje_entorno_id" clase_id="xml_lenguaje_entorno" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_xml_lenguaje_entorno_id" <?php echo ($xml_lenguaje_codigo->getXmlLenguajeEntornoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_xml_lenguaje_entorno_id" clase_id="xml_lenguaje_entorno" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_xml_lenguaje_entorno_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_xml_lenguaje_entorno_id', Gral::getCmbFiltro(XmlLenguajeEntorno::getXmlLenguajeEntornosCmb(), '...'), $xml_lenguaje_codigo->getXmlLenguajeEntornoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_xml_lenguaje_entorno_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('xml_lenguaje_entorno_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getCodigo()) ?>' size='40' />

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
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=xml_lenguaje_codigo_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($xml_lenguaje_codigo->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($xml_lenguaje_codigo->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(XmlLenguajeCodigo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(XmlLenguajeCodigo::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($xml_lenguaje_codigo->getId()) != ''){ ?>
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

