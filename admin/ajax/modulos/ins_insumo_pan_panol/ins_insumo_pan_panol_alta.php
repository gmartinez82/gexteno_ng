<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_PAN_PANOL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_pan_panol';
$db_nombre_pagina = 'ins_insumo_pan_panol_alta';

$ins_insumo_pan_panol = new InsInsumoPanPanol();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_pan_panol = new InsInsumoPanPanol();
	if(trim($hdn_id) != '') $ins_insumo_pan_panol->setId($hdn_id, false);
	$ins_insumo_pan_panol->setInsInsumoId(Gral::getVars(1, "ins_insumo_pan_panol_dbsug_ins_insumo_id", null));
	$ins_insumo_pan_panol->setPanPanolId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_panol_id", null));
	$ins_insumo_pan_panol->setPanUbiPisoId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_piso_id", null));
	$ins_insumo_pan_panol->setPanUbiPasilloId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id", null));
	$ins_insumo_pan_panol->setPanUbiEstanteId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_estante_id", null));
	$ins_insumo_pan_panol->setPanUbiAlturaId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_altura_id", null));
	$ins_insumo_pan_panol->setPanUbiCasilleroId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_casillero_id", null));
	$ins_insumo_pan_panol->setPanUbiCeldaId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_celda_id", null));
	$ins_insumo_pan_panol->setInsClasificacionId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_ins_clasificacion_id", null));
	$ins_insumo_pan_panol->setPuntoMinimo(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_minimo", 0));
	$ins_insumo_pan_panol->setPuntoPedido(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_pedido", 0));
	$ins_insumo_pan_panol->setPuntoMaximo(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_maximo", 0));
	$ins_insumo_pan_panol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_pan_panol_txt_creado")));
	$ins_insumo_pan_panol->setCreadoPor(Gral::getVars(1, "ins_insumo_pan_panol__creado_por", null));
	$ins_insumo_pan_panol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_pan_panol_txt_modificado")));
	$ins_insumo_pan_panol->setModificadoPor(Gral::getVars(1, "ins_insumo_pan_panol__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_pan_panol->control();
			if(!$error->getExisteError()){
				$ins_insumo_pan_panol->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_pan_panol_alta.php?cs=1&id='.$ins_insumo_pan_panol->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_pan_panol->control();
			if(!$error->getExisteError()){
				$ins_insumo_pan_panol->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_pan_panol_alta.php?cs=1');
				$ins_insumo_pan_panol = new InsInsumoPanPanol();
			}
		break;
	}
	Gral::setSes('InsInsumoPanPanol_ULTIMO_INSERTADO', $ins_insumo_pan_panol->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_pan_panol_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_pan_panol_id', 0);
	if($cmb_ins_insumo_pan_panol_id != 0){
		$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($cmb_ins_insumo_pan_panol_id);
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

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_pan_panol->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_pan_panol' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_pan_panol_dbsug_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_dbsug_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<?php echo Html::html_get_dbsuggest(1, 'ins_insumo_pan_panol_dbsug_ins_insumo', 'ajax/modulos/ins_insumo/ins_insumo_dbsuggest.php', false, true, '', 'Ingrese ...', $ins_insumo_pan_panol->getInsInsumoId(), $ins_insumo_pan_panol->getInsInsumo()->getDescripcion()) ?>            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_panol_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_panol_id' ?>" >
				  
                                        <?php Lang::_lang('PanPanol', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_panol_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_panol_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), $ins_insumo_pan_panol->getPanPanolId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_PANOL')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_panol_id" <?php echo ($ins_insumo_pan_panol->getPanPanolId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_panol_id" clase_id="pan_panol" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_panol_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_panol_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_panol_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_panol_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_piso_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_piso_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiPiso', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_piso_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_piso_id', Gral::getCmbFiltro(PanUbiPiso::getPanUbiPisosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPisoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_PISO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_piso_id" clase_id="pan_ubi_piso" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_piso_id" <?php echo ($ins_insumo_pan_panol->getPanUbiPisoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_piso_id" clase_id="pan_ubi_piso" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_piso_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_piso_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_piso_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_piso_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_piso_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_pasillo_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiPasillo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_pasillo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id', Gral::getCmbFiltro(PanUbiPasillo::getPanUbiPasillosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPasilloId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_PASILLO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id" clase_id="pan_ubi_pasillo" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_pasillo_id" <?php echo ($ins_insumo_pan_panol->getPanUbiPasilloId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id" clase_id="pan_ubi_pasillo" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_pasillo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_pasillo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_pasillo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_pasillo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_pasillo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_estante_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_estante_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiEstante', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_estante_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_estante_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_estante_id', Gral::getCmbFiltro(PanUbiEstante::getPanUbiEstantesCmb(), '...'), $ins_insumo_pan_panol->getPanUbiEstanteId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_ESTANTE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_estante_id" clase_id="pan_ubi_estante" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_estante_id" <?php echo ($ins_insumo_pan_panol->getPanUbiEstanteId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_estante_id" clase_id="pan_ubi_estante" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_estante_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_estante_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_estante_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_estante_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_estante_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_estante_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_altura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_altura_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiAltura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_altura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_altura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_altura_id', Gral::getCmbFiltro(PanUbiAltura::getPanUbiAlturasCmb(), '...'), $ins_insumo_pan_panol->getPanUbiAlturaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_ALTURA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_altura_id" clase_id="pan_ubi_altura" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_altura_id" <?php echo ($ins_insumo_pan_panol->getPanUbiAlturaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_altura_id" clase_id="pan_ubi_altura" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_altura_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_altura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_altura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_altura_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_altura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_altura_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_casillero_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_casillero_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiCasillero', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_casillero_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_casillero_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_casillero_id', Gral::getCmbFiltro(PanUbiCasillero::getPanUbiCasillerosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiCasilleroId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_CASILLERO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_casillero_id" clase_id="pan_ubi_casillero" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_casillero_id" <?php echo ($ins_insumo_pan_panol->getPanUbiCasilleroId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_casillero_id" clase_id="pan_ubi_casillero" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_casillero_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_casillero_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_casillero_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_casillero_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_casillero_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_casillero_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_pan_ubi_celda_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pan_ubi_celda_id' ?>" >
				  
                                        <?php Lang::_lang('PanUbiCelda', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_pan_ubi_celda_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pan_ubi_celda_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_celda_id', Gral::getCmbFiltro(PanUbiCelda::getPanUbiCeldasCmb(), '...'), $ins_insumo_pan_panol->getPanUbiCeldaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_PAN_UBI_CELDA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_celda_id" clase_id="pan_ubi_celda" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pan_ubi_celda_id" <?php echo ($ins_insumo_pan_panol->getPanUbiCeldaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_pan_ubi_celda_id" clase_id="pan_ubi_celda" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_pan_ubi_celda_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_celda_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_pan_ubi_celda_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_celda_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_pan_ubi_celda_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_celda_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_cmb_ins_clasificacion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_clasificacion_id' ?>" >
				  
                                        <?php Lang::_lang('Clasificacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_cmb_ins_clasificacion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(), '...'), $ins_insumo_pan_panol->getInsClasificacionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA_CMB_EDIT_INS_CLASIFICACION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_pan_panol_cmb_ins_clasificacion_id" clase_id="ins_clasificacion" prefijo='ins_insumo_pan_panol_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_clasificacion_id" <?php echo ($ins_insumo_pan_panol->getInsClasificacionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_pan_panol_cmb_ins_clasificacion_id" clase_id="ins_clasificacion" prefijo='ins_insumo_pan_panol_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_pan_panol_cmb_ins_clasificacion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_ins_clasificacion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_ins_clasificacion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_ins_clasificacion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_ins_clasificacion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_txt_punto_minimo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_minimo' ?>" >
				  
                                        <?php Lang::_lang('Punto de Minimo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_txt_punto_minimo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_minimo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_pan_panol_txt_punto_minimo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_minimo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMinimo(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_punto_minimo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_punto_minimo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_minimo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_minimo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_minimo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_txt_punto_pedido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_pedido' ?>" >
				  
                                        <?php Lang::_lang('Punto de Pedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_txt_punto_pedido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_pedido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_pan_panol_txt_punto_pedido' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_pedido' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoPedido(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_punto_pedido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_punto_pedido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_pedido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_pedido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_pedido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_pan_panol_txt_punto_maximo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_maximo' ?>" >
				  
                                        <?php Lang::_lang('Punto de Maximo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_pan_panol_txt_punto_maximo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_pan_panol_txt_punto_maximo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_maximo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMaximo(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_insumo_pan_panol_alta_punto_maximo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_pan_panol_alta_punto_maximo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_maximo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_pan_panol_alta_punto_maximo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_maximo')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_pan_panol_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_pan_panol'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
                    <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                </td>
            </tr>
      </table>
      
	  
</form>
</body>
</html>
<script>
    setInit();
    setInitDbSuggest();
    setInitDbContext();
</script>

