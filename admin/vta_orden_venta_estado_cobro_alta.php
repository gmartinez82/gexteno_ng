<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_orden_venta_estado_cobro';
$db_nombre_pagina = 'vta_orden_venta_estado_cobro_alta';


$vta_orden_venta_estado_cobro = new VtaOrdenVentaEstadoCobro();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $vta_orden_venta_estado_cobro = new VtaOrdenVentaEstadoCobro();
    if(trim($hdn_id) != '') $vta_orden_venta_estado_cobro->setId($hdn_id, false);
	$vta_orden_venta_estado_cobro->setDescripcion(Gral::getVars(1, "txt_descripcion"));
	$vta_orden_venta_estado_cobro->setVtaOrdenVentaId(Gral::getVars(1, "cmb_vta_orden_venta_id", null));
	$vta_orden_venta_estado_cobro->setVtaOrdenVentaTipoEstadoCobroId(Gral::getVars(1, "cmb_vta_orden_venta_tipo_estado_cobro_id", null));
	$vta_orden_venta_estado_cobro->setInicial(Gral::getVars(1, "cmb_inicial", 0));
	$vta_orden_venta_estado_cobro->setActual(Gral::getVars(1, "cmb_actual", 0));
	$vta_orden_venta_estado_cobro->setCodigo(Gral::getVars(1, "txt_codigo"));
	$vta_orden_venta_estado_cobro->setObservacion(Gral::getVars(1, "txa_observacion"));
	$vta_orden_venta_estado_cobro->setOrden(Gral::getVars(1, "txt_orden", 0));
	$vta_orden_venta_estado_cobro->setEstado(Gral::getVars(1, "cmb_estado", 0));
	$vta_orden_venta_estado_cobro->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$vta_orden_venta_estado_cobro->setCreadoPor(Gral::getVars(1, "_creado_por", 0));
	$vta_orden_venta_estado_cobro->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$vta_orden_venta_estado_cobro->setModificadoPor(Gral::getVars(1, "_modificado_por", 0));

	$vta_orden_venta_estado_cobro_estado = new VtaOrdenVentaEstadoCobro();
	if(trim($hdn_id) != ''){
            $vta_orden_venta_estado_cobro_estado->setId($hdn_id);            
            $vta_orden_venta_estado_cobro->setEstado($vta_orden_venta_estado_cobro_estado->getEstado());
	}else{            
            $vta_orden_venta_estado_cobro->setEstado(1);		
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_orden_venta_estado_cobro->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_estado_cobro->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$vta_orden_venta_estado_cobro->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_orden_venta_estado_cobro->control();
			if(!$error->getExisteError()){
				$vta_orden_venta_estado_cobro->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$vta_orden_venta_estado_cobro->setId($hdn_id);
	}else{
	
	$vta_orden_venta_estado_cobro->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_orden_venta_estado_cobro->setVtaOrdenVentaId(Gral::getVars(2, "vta_orden_venta_id", 'null'));
	$vta_orden_venta_estado_cobro->setVtaOrdenVentaTipoEstadoCobroId(Gral::getVars(2, "vta_orden_venta_tipo_estado_cobro_id", 'null'));
	$vta_orden_venta_estado_cobro->setInicial(Gral::getVars(2, "inicial", 0));
	$vta_orden_venta_estado_cobro->setActual(Gral::getVars(2, "actual", 0));
	$vta_orden_venta_estado_cobro->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_orden_venta_estado_cobro->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_orden_venta_estado_cobro->setOrden(Gral::getVars(2, "orden", 0));
	$vta_orden_venta_estado_cobro->setEstado(Gral::getVars(2, "estado", 0));
	$vta_orden_venta_estado_cobro->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_orden_venta_estado_cobro->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_orden_venta_estado_cobro->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_orden_venta_estado_cobro->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaOrdenVentaEstadoCobro::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaOrdenVentaEstadoCobro::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_vta_orden_venta_estado_cobro'>
        
            <tr>
                <td id="label_txt_descripcion" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >

                    <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_orden_venta_estado_cobro_alta&atributo=descripcion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_descripcion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_descripcion' value='<?php Gral::_echoTxt($vta_orden_venta_estado_cobro->getDescripcion()) ?>' size='50' />

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
                <td id="label_cmb_vta_orden_venta_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_id' ?>" >

                    <?php Lang::_lang('VtaOrdenVenta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_orden_venta_estado_cobro_alta&atributo=vta_orden_venta_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_orden_venta_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ALTA_CMB_EDIT_VTA_ORDEN_VENTA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_id" <?php echo ($vta_orden_venta_estado_cobro->getVtaOrdenVentaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_orden_venta_id" clase_id="vta_orden_venta" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_orden_venta_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_orden_venta_id', Gral::getCmbFiltro(VtaOrdenVenta::getVtaOrdenVentasCmb(), '...'), $vta_orden_venta_estado_cobro->getVtaOrdenVentaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_orden_venta_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_orden_venta_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_vta_orden_venta_tipo_estado_cobro_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_cobro_id' ?>" >

                    <?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_orden_venta_estado_cobro_alta&atributo=vta_orden_venta_tipo_estado_cobro_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_vta_orden_venta_tipo_estado_cobro_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('vta_orden_venta_tipo_estado_cobro_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ALTA_CMB_EDIT_VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_vta_orden_venta_tipo_estado_cobro_id" clase_id="vta_orden_venta_tipo_estado_cobro" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_orden_venta_tipo_estado_cobro_id" <?php echo ($vta_orden_venta_estado_cobro->getVtaOrdenVentaTipoEstadoCobroId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_vta_orden_venta_tipo_estado_cobro_id" clase_id="vta_orden_venta_tipo_estado_cobro" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_vta_orden_venta_tipo_estado_cobro_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_vta_orden_venta_tipo_estado_cobro_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstadoCobro::getVtaOrdenVentaTipoEstadoCobrosCmb(), '...'), $vta_orden_venta_estado_cobro->getVtaOrdenVentaTipoEstadoCobroId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_cobro_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_cobro_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_cobro_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_vta_orden_venta_tipo_estado_cobro_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_orden_venta_tipo_estado_cobro_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_codigo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >

                    <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_orden_venta_estado_cobro_alta&atributo=codigo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_codigo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='txt_codigo' value='<?php Gral::_echoTxt($vta_orden_venta_estado_cobro->getCodigo()) ?>' size='40' />

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
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=vta_orden_venta_estado_cobro_alta&atributo=observacion' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txa_observacion" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <textarea name='txa_observacion' rows='10' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?> '><?php Gral::_echoTxt($vta_orden_venta_estado_cobro->getObservacion()) ?></textarea>

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
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_orden_venta_estado_cobro->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(VtaOrdenVentaEstadoCobro::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(VtaOrdenVentaEstadoCobro::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($vta_orden_venta_estado_cobro->getId()) != ''){ ?>
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

