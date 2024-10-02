<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_pan_panol';
$db_nombre_pagina = 'ins_insumo_pan_panol_alta';


$ins_insumo_pan_panol = new InsInsumoPanPanol();
$error = new DbError();

if(Gral::esPost()){
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
    if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }

    $ins_insumo_pan_panol = new InsInsumoPanPanol();
    if(trim($hdn_id) != '') $ins_insumo_pan_panol->setId($hdn_id, false);
	$ins_insumo_pan_panol->setInsInsumoId(Gral::getVars(1, "dbsug_ins_insumo_id", null));
	$ins_insumo_pan_panol->setPanPanolId(Gral::getVars(1, "cmb_pan_panol_id", null));
	$ins_insumo_pan_panol->setPanUbiPisoId(Gral::getVars(1, "cmb_pan_ubi_piso_id", null));
	$ins_insumo_pan_panol->setPanUbiPasilloId(Gral::getVars(1, "cmb_pan_ubi_pasillo_id", null));
	$ins_insumo_pan_panol->setPanUbiEstanteId(Gral::getVars(1, "cmb_pan_ubi_estante_id", null));
	$ins_insumo_pan_panol->setPanUbiAlturaId(Gral::getVars(1, "cmb_pan_ubi_altura_id", null));
	$ins_insumo_pan_panol->setPanUbiCasilleroId(Gral::getVars(1, "cmb_pan_ubi_casillero_id", null));
	$ins_insumo_pan_panol->setPanUbiCeldaId(Gral::getVars(1, "cmb_pan_ubi_celda_id", null));
	$ins_insumo_pan_panol->setInsClasificacionId(Gral::getVars(1, "cmb_ins_clasificacion_id", null));
	$ins_insumo_pan_panol->setPuntoMinimo(Gral::getVars(1, "txt_punto_minimo", 0));
	$ins_insumo_pan_panol->setPuntoPedido(Gral::getVars(1, "txt_punto_pedido", 0));
	$ins_insumo_pan_panol->setPuntoMaximo(Gral::getVars(1, "txt_punto_maximo", 0));
	$ins_insumo_pan_panol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_creado")));
	$ins_insumo_pan_panol->setCreadoPor(Gral::getVars(1, "_creado_por", null));
	$ins_insumo_pan_panol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "txt_modificado")));
	$ins_insumo_pan_panol->setModificadoPor(Gral::getVars(1, "_modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_pan_panol->control();
			if(!$error->getExisteError()){
				$ins_insumo_pan_panol->saveDesdeBackend();				
								
				header('Location: ?cs=1&id='.$ins_insumo_pan_panol->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_pan_panol->control();
			if(!$error->getExisteError()){
				$ins_insumo_pan_panol->saveDesdeBackend();
				
				header('Location: ?cs=1');
			}
		break;
	}
}else{
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != ''){ 
		$ins_insumo_pan_panol->setId($hdn_id);
	}else{
	
	$ins_insumo_pan_panol->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_pan_panol->setPanPanolId(Gral::getVars(2, "pan_panol_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiPisoId(Gral::getVars(2, "pan_ubi_piso_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiPasilloId(Gral::getVars(2, "pan_ubi_pasillo_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiEstanteId(Gral::getVars(2, "pan_ubi_estante_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiAlturaId(Gral::getVars(2, "pan_ubi_altura_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiCasilleroId(Gral::getVars(2, "pan_ubi_casillero_id", 'null'));
	$ins_insumo_pan_panol->setPanUbiCeldaId(Gral::getVars(2, "pan_ubi_celda_id", 'null'));
	$ins_insumo_pan_panol->setInsClasificacionId(Gral::getVars(2, "ins_clasificacion_id", 'null'));
	$ins_insumo_pan_panol->setPuntoMinimo(Gral::getVars(2, "punto_minimo", 0));
	$ins_insumo_pan_panol->setPuntoPedido(Gral::getVars(2, "punto_pedido", 0));
	$ins_insumo_pan_panol->setPuntoMaximo(Gral::getVars(2, "punto_maximo", 0));
	$ins_insumo_pan_panol->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_pan_panol->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_pan_panol->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_pan_panol->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
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
    
	<div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumoPanPanols') ?> </div>
	<div class='contenedor central'>
	  
      <?php include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>

    <div class="alta datos">
      
      <table width='100%' border='0' align='center'>
        <tr>
          <td align='right' class='adm_carga_datos_botones'>
            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumoPanPanol::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumoPanPanol::getInfoBtnVolver('url')) ?>"' />
	
          </td>
        </tr>
      </table>	  
	
<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA')){ ?>

        <div class="titulo"><?php Lang::_lang('Info Basica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?></div>
        
        <table width='100%' border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_ins_insumo_pan_panol'>
        
            <tr>
                <td id="label_dbsug_ins_insumo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >

                    <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=ins_insumo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_dbsug_ins_insumo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-dbsug' : ''; ?>
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_pan_panol->getInsInsumoId(), $ins_insumo_pan_panol->getInsInsumo()->getDescripcion(), 40, false, $error_input_css) ?>

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
                <td id="label_cmb_pan_panol_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >

                    <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_panol_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_panol_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_panol_id" clase_id="pan_panol" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($ins_insumo_pan_panol->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_panol_id" clase_id="pan_panol" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_panol_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $ins_insumo_pan_panol->getPanPanolId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_piso_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_piso_id' ?>" >

                    <?php Lang::_lang('PanUbiPiso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_piso_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_piso_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_PISO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_piso_id" clase_id="pan_ubi_piso" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_piso_id" <?php echo ($ins_insumo_pan_panol->getPanUbiPisoId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_piso_id" clase_id="pan_ubi_piso" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_piso_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_piso_id', Gral::getCmbFiltro(PanUbiPiso::getPanUbiPisosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPisoId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_piso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_piso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_piso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_piso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_pasillo_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_pasillo_id' ?>" >

                    <?php Lang::_lang('PanUbiPasillo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_pasillo_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_pasillo_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_pasillo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_PASILLO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_pasillo_id" clase_id="pan_ubi_pasillo" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_pasillo_id" <?php echo ($ins_insumo_pan_panol->getPanUbiPasilloId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_pasillo_id" clase_id="pan_ubi_pasillo" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_pasillo_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_pasillo_id', Gral::getCmbFiltro(PanUbiPasillo::getPanUbiPasillosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPasilloId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_pasillo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_pasillo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_pasillo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_pasillo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_pasillo_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_estante_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_estante_id' ?>" >

                    <?php Lang::_lang('PanUbiEstante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_estante_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_estante_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_estante_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_ESTANTE')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_estante_id" clase_id="pan_ubi_estante" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_estante_id" <?php echo ($ins_insumo_pan_panol->getPanUbiEstanteId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_estante_id" clase_id="pan_ubi_estante" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_estante_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_estante_id', Gral::getCmbFiltro(PanUbiEstante::getPanUbiEstantesCmb(), '...'), $ins_insumo_pan_panol->getPanUbiEstanteId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_estante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_estante_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_estante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_estante_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_estante_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_altura_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_altura_id' ?>" >

                    <?php Lang::_lang('PanUbiAltura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_altura_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_altura_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_altura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_ALTURA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_altura_id" clase_id="pan_ubi_altura" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_altura_id" <?php echo ($ins_insumo_pan_panol->getPanUbiAlturaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_altura_id" clase_id="pan_ubi_altura" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_altura_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_altura_id', Gral::getCmbFiltro(PanUbiAltura::getPanUbiAlturasCmb(), '...'), $ins_insumo_pan_panol->getPanUbiAlturaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_altura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_altura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_altura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_altura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_altura_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_casillero_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_casillero_id' ?>" >

                    <?php Lang::_lang('PanUbiCasillero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_casillero_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_casillero_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_casillero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_CASILLERO')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_casillero_id" clase_id="pan_ubi_casillero" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_casillero_id" <?php echo ($ins_insumo_pan_panol->getPanUbiCasilleroId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_casillero_id" clase_id="pan_ubi_casillero" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_casillero_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_casillero_id', Gral::getCmbFiltro(PanUbiCasillero::getPanUbiCasillerosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiCasilleroId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_casillero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_casillero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_casillero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_casillero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_casillero_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_pan_ubi_celda_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_celda_id' ?>" >

                    <?php Lang::_lang('PanUbiCelda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=pan_ubi_celda_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_pan_ubi_celda_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_celda_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_CELDA')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_pan_ubi_celda_id" clase_id="pan_ubi_celda" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_celda_id" <?php echo ($ins_insumo_pan_panol->getPanUbiCeldaId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_pan_ubi_celda_id" clase_id="pan_ubi_celda" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_pan_ubi_celda_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_pan_ubi_celda_id', Gral::getCmbFiltro(PanUbiCelda::getPanUbiCeldasCmb(), '...'), $ins_insumo_pan_panol->getPanUbiCeldaId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_celda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_pan_ubi_celda_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_celda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_pan_ubi_celda_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_celda_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_cmb_ins_clasificacion_id" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_ins_clasificacion_id' ?>" >

                    <?php Lang::_lang('Clasificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=ins_clasificacion_id' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_cmb_ins_clasificacion_id" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_INS_CLASIFICACION')){ ?>
                <div class="div_botonera_cmb_alta_editar">
                   <img class="img_btn_editar" elemento_id="cmb_ins_clasificacion_id" clase_id="ins_clasificacion" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_clasificacion_id" <?php echo ($ins_insumo_pan_panol->getInsClasificacionId() == 'null') ? "style='display:none;'" : '' ?> />

                   <img class="img_btn_agregar_nuevo" elemento_id="cmb_ins_clasificacion_id" clase_id="ins_clasificacion" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                   <div class="div_modal_cmb_ins_clasificacion_id"></div>
                </div>
                <?php } ?>
                
		<?php Html::html_dib_select(1, 'cmb_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(), '...'), $ins_insumo_pan_panol->getInsClasificacionId(), 'textbox '.$error_input_css) ?>
		

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_clasificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_clasificacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_clasificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_ins_clasificacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_punto_minimo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_punto_minimo' ?>" >

                    <?php Lang::_lang('Punto de Minimo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=punto_minimo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_punto_minimo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('punto_minimo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_punto_minimo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_punto_minimo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMinimo()) ?>' size='5' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_minimo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_minimo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_minimo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_minimo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_minimo')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_punto_pedido" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_punto_pedido' ?>" >

                    <?php Lang::_lang('Punto de Pedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=punto_pedido' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_punto_pedido" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('punto_pedido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_punto_pedido' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_punto_pedido' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoPedido()) ?>' size='5' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_pedido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_pedido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_pedido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_pedido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_pedido')->getMensaje()) ?></div>
            </td>
        </tr>
        
            <tr>
                <td id="label_txt_punto_maximo" class="adm_carga_datos_titulos" width="" help="<?php echo 'help_'.$db_nombre_pagina.'_punto_maximo' ?>" >

                    <?php Lang::_lang('Punto de Maximo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG')) { ?>
                        <div class='gen-atributos-config db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/atributos/atributos_db_context_acciones.php?modulo=ins_insumo_pan_panol_alta&atributo=punto_maximo' modulo_metodo_init='setInit()'>
                            <img src='imgs/btn_config.png' width='20' align='absmiddle' />
                        </div>
                    <?php } ?>

                </td>
                  
                <td id="dato_txt_punto_maximo" class="adm_carga_datos_datos" width="">
                  <?php $error_input_css = ($error->getErrorXIndice('punto_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                    <input name='txt_punto_maximo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='txt_punto_maximo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMaximo()) ?>' size='5' />

                <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_maximo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_maximo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                <?php } ?>

                <?php if(Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_maximo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                    <div class="gen-help-comentario"><?php Lang::_lang('comentario_'.$db_nombre_pagina.'_punto_maximo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                <?php } ?>

                <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_maximo')->getMensaje()) ?></div>
            </td>
        </tr>
        
    </table>
    
<?php } ?>

    <table width='100%' border='0' align='center'>
        <tr>
          <td align='right'  class='adm_carga_datos_botones'><input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getId()) ?>'/>

            <input name='btn_listado' type='button' id='btn_listado' value='<?php Lang::_lang(InsInsumoPanPanol::getInfoBtnVolver('label')) ?>' onclick='location.href="<?php Gral::_echo(InsInsumoPanPanol::getInfoBtnVolver('url')) ?>"' />
			  
            <input name='btn_guardarnvo' type='submit' id='btn_guardarnvo' value='<?php Lang::_lang('Guardar y Agregar Nuevo') ?>' />
	
            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
		  
            </td>
        </tr>
      </table>
    </div>


    <?php if(trim($ins_insumo_pan_panol->getId()) != ''){ ?>
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

