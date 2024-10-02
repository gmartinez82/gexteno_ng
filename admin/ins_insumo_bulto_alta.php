<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_bulto';
$db_nombre_pagina = 'ins_insumo_bulto_alta';


$ins_insumo_bulto = new InsInsumoBulto();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ins_insumo_bulto = new InsInsumoBulto();
    if(trim($hdn_id) != '') $ins_insumo_bulto->setId($hdn_id, false);
	$ins_insumo_bulto->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$ins_insumo_bulto->setInsInsumoId(Gral::getVars(1, "dbsug_ins_insumo_id", null));
	$ins_insumo_bulto->setCantidad(Gral::getVars(1, "txt_cantidad", 0));
	$ins_insumo_bulto->setInsUnidadMedidaId(Gral::getVars(1, "cmb_ins_unidad_medida_id", null));
	$ins_insumo_bulto->setCodigo(Gral::getVars(1, "txt_codigo"));
	$ins_insumo_bulto->setObservacion(Gral::getVars(1, "txa_observacion"));
	$ins_insumo_bulto->setOrden(Gral::getVars(1, "txt_orden", 0));
	$ins_insumo_bulto->setEstado(Gral::getVars(1, "_estado", 0));
	$ins_insumo_bulto->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ins_insumo_bulto->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$ins_insumo_bulto->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ins_insumo_bulto->setModificadoPor(Gral::getVars(1, "_modificado_por", null));

	$ins_insumo_bulto_estado = new InsInsumoBulto();
	if(trim($hdn_id) != ''){
            $ins_insumo_bulto_estado->setId($hdn_id);            
            $ins_insumo_bulto->setEstado($ins_insumo_bulto_estado->getEstado());
	}else{            
            $ins_insumo_bulto->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_bulto->control();
			if(!$error->getExisteError()){
				$ins_insumo_bulto->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$ins_insumo_bulto->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_bulto->control();
			if(!$error->getExisteError()){
				$ins_insumo_bulto->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ins_insumo_bulto->setId($hdn_id);
	}else{
	
	$ins_insumo_bulto->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo_bulto->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_bulto->setCantidad(Gral::getVars(2, "cantidad", 0));
	$ins_insumo_bulto->setInsUnidadMedidaId(Gral::getVars(2, "ins_unidad_medida_id", 'null'));
	$ins_insumo_bulto->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_insumo_bulto->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo_bulto->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo_bulto->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo_bulto->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_bulto->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_bulto->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_bulto->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumoBultos') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumoBulto::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumoBulto::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_BULTO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_insumo_bulto'>
        
            <tr>
                <td id="label_dbsug_ins_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >

                    <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_bulto_alta&atributo=ins_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_ins_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_bulto->getInsInsumoId(), $ins_insumo_bulto->getInsInsumo()->getDescripcion(), 40, false, $error_input_css) ?>

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
                <td id="label_txt_cantidad" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >

                    <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_bulto_alta&atributo=cantidad' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_cantidad" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_cantidad' value='<?php Gral::_echoTxt($ins_insumo_bulto->getCantidad()) ?>' size='40' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_unidad_medida_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_unidad_medida_id' ?>" >

                    <?php Lang::_lang('InsUnidadMedida', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_bulto_alta&atributo=ins_unidad_medida_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_unidad_medida_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_BULTO_ALTA_CMB_EDIT_INS_UNIDAD_MEDIDA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_unidad_medida_id" <?php echo ($ins_insumo_bulto->getInsUnidadMedidaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_unidad_medida_id" clase_id="ins_unidad_medida" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_unidad_medida_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_unidad_medida_id', Gral::getCmbFiltro(InsUnidadMedida::getInsUnidadMedidasCmb(), '...'), $ins_insumo_bulto->getInsUnidadMedidaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_unidad_medida_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_unidad_medida_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_unidad_medida_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txa_observacion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >

                    <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_bulto_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($ins_insumo_bulto->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_bulto->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumoBulto::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumoBulto::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ins_insumo_bulto->getId()) != ''){ ?>
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

