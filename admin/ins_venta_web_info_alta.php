<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_venta_web_info';
$db_nombre_pagina = 'ins_venta_web_info_alta';


$ins_venta_web_info = new InsVentaWebInfo();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ins_venta_web_info = new InsVentaWebInfo();
    if(trim($hdn_id) != '') $ins_venta_web_info->setId($hdn_id, false);
	$ins_venta_web_info->setInsInsumoId(Gral::getVars(1, "dbsug_ins_insumo_id", null));
	$ins_venta_web_info->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$ins_venta_web_info->setCodigo(Gral::getVars(1, "txt_codigo"));
	$ins_venta_web_info->setDestacado(Gral::getVars(1, "cmb_destacado", 0));
	$ins_venta_web_info->setBadge(Gral::getVars(1, "txt_badge"));
	$ins_venta_web_info->setDescripcionBreve(Gral::getVars(1, "txa_descripcion_breve"));
	$ins_venta_web_info->setDescripcionExt(Gral::getVars(1, "txa_descripcion_ext"));
	$ins_venta_web_info->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ins_venta_web_info->setOrden(Gral::getVars(1, "_orden", 0));
	$ins_venta_web_info->setEstado(Gral::getVars(1, "_estado", 0));
	$ins_venta_web_info->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ins_venta_web_info->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$ins_venta_web_info->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ins_venta_web_info->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$ins_venta_web_info_estado = new InsVentaWebInfo();
	if(trim($hdn_id) != ''){
            $ins_venta_web_info_estado->setId($hdn_id);            
            $ins_venta_web_info->setEstado($ins_venta_web_info_estado->getEstado());
	}else{            
            $ins_venta_web_info->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_venta_web_info->control();
			if(!$error->getExisteError()){
				$ins_venta_web_info->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$ins_venta_web_info->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_venta_web_info->control();
			if(!$error->getExisteError()){
				$ins_venta_web_info->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ins_venta_web_info->setId($hdn_id);
	}else{
	
	$ins_venta_web_info->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_venta_web_info->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_venta_web_info->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_venta_web_info->setDestacado(Gral::getVars(2, "destacado", 0));
	$ins_venta_web_info->setBadge(Gral::getVars(2, "badge", ''));
	$ins_venta_web_info->setDescripcionBreve(Gral::getVars(2, "descripcion_breve", ''));
	$ins_venta_web_info->setDescripcionExt(Gral::getVars(2, "descripcion_ext", ''));
	$ins_venta_web_info->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_venta_web_info->setOrden(Gral::getVars(2, "orden", 0));
	$ins_venta_web_info->setEstado(Gral::getVars(2, "estado", 0));
	$ins_venta_web_info->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_venta_web_info->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_venta_web_info->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_venta_web_info->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('InsVentaWebInfos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsVentaWebInfo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsVentaWebInfo::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('INS_VENTA_WEB_INFO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_venta_web_info'>
        
            <tr>
                <td id="label_dbsug_ins_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >

                    <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_web_info_alta&atributo=ins_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_ins_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_venta_web_info->getInsInsumoId(), $ins_venta_web_info->getInsInsumo()->getDescripcion(), 40, false, $error_input_css) ?>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Titulo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_web_info_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($ins_venta_web_info->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_destacado" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_destacado' ?>" >

                    <?php Lang::_lang('Destacado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_web_info_alta&atributo=destacado' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_destacado" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('destacado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
		<?php Html::html_dib_select(1, 'cmb_destacado', GralSiNo::getGralSiNosCmb(), $ins_venta_web_info->getDestacado(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_destacado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_destacado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_destacado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('destacado')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_descripcion_breve" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_breve' ?>" >

                    <?php Lang::_lang('Desc Breve', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_web_info_alta&atributo=descripcion_breve' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_descripcion_breve" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_breve')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_descripcion_breve' rows='5' cols='50' id='txa_descripcion_breve' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionBreve()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_breve', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_breve', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_breve')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_descripcion_ext" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_ext' ?>" >

                    <?php Lang::_lang('Desc Extendida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_venta_web_info_alta&atributo=descripcion_ext' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_descripcion_ext" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion_ext')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_descripcion_ext' rows='5' cols='50' id='txa_descripcion_ext' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_venta_web_info->getDescripcionExt()) ?></textarea>

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_ext', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion_ext', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_ext', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_descripcion_ext', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_ext')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_venta_web_info->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsVentaWebInfo::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsVentaWebInfo::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ins_venta_web_info->getId()) != ''){ ?>
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

