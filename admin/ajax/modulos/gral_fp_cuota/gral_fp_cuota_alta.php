<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA')){
    echo "No tiene asignada la credencial GRAL_FP_CUOTA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'gral_fp_cuota';
$db_nombre_pagina = 'gral_fp_cuota_alta';

$gral_fp_cuota = new GralFpCuota();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$gral_fp_cuota = new GralFpCuota();
	if(trim($hdn_id) != '') $gral_fp_cuota->setId($hdn_id, false);
	$gral_fp_cuota->setDescripcion(Gral::getVars(1, "gral_fp_cuota_txt_descripcion"));
	$gral_fp_cuota->setGralFpMedioPagoId(Gral::getVars(1, "gral_fp_cuota_cmb_gral_fp_medio_pago_id", null));
	$gral_fp_cuota->setCantidad(Gral::getVars(1, "gral_fp_cuota_txt_cantidad", 0));
	$gral_fp_cuota->setPorDefault(Gral::getVars(1, "gral_fp_cuota_cmb_por_default", 0));
	$gral_fp_cuota->setDiasVencimiento(Gral::getVars(1, "gral_fp_cuota_txt_dias_vencimiento", 0));
	$gral_fp_cuota->setRecargo(Gral::getVars(1, "gral_fp_cuota_txt_recargo", 0));
	$gral_fp_cuota->setCodigo(Gral::getVars(1, "gral_fp_cuota_txt_codigo"));
	$gral_fp_cuota->setObservacion(Gral::getVars(1, "gral_fp_cuota_txa_observacion"));
	$gral_fp_cuota->setOrden(Gral::getVars(1, "gral_fp_cuota_txt_orden", 0));
	$gral_fp_cuota->setEstado(Gral::getVars(1, "gral_fp_cuota_cmb_estado", 0));
	$gral_fp_cuota->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_fp_cuota_txt_creado")));
	$gral_fp_cuota->setCreadoPor(Gral::getVars(1, "gral_fp_cuota__creado_por", 0));
	$gral_fp_cuota->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "gral_fp_cuota_txt_modificado")));
	$gral_fp_cuota->setModificadoPor(Gral::getVars(1, "gral_fp_cuota__modificado_por", 0));

	$gral_fp_cuota_estado = new GralFpCuota();
	if(trim($hdn_id) != ''){
		$gral_fp_cuota_estado->setId($hdn_id);
		$gral_fp_cuota->setEstado($gral_fp_cuota_estado->getEstado());
				
	}else{
		$gral_fp_cuota->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $gral_fp_cuota->control();
			if(!$error->getExisteError()){
				$gral_fp_cuota->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: gral_fp_cuota_alta.php?cs=1&id='.$gral_fp_cuota->getId());
			}
		break;
		case 'guardarnvo':
			$error = $gral_fp_cuota->control();
			if(!$error->getExisteError()){
				$gral_fp_cuota->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: gral_fp_cuota_alta.php?cs=1');
				$gral_fp_cuota = new GralFpCuota();
			}
		break;
	}
	Gral::setSes('GralFpCuota_ULTIMO_INSERTADO', $gral_fp_cuota->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_gral_fp_cuota_id = Gral::getVars(2, $prefijo.'cmb_gral_fp_cuota_id', 0);
	if($cmb_gral_fp_cuota_id != 0){
		$gral_fp_cuota = GralFpCuota::getOxId($cmb_gral_fp_cuota_id);
	}else{
	
	$gral_fp_cuota->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$gral_fp_cuota->setGralFpMedioPagoId(Gral::getVars(2, "gral_fp_medio_pago_id", 'null'));
	$gral_fp_cuota->setCantidad(Gral::getVars(2, "cantidad", 0));
	$gral_fp_cuota->setPorDefault(Gral::getVars(2, "por_default", 0));
	$gral_fp_cuota->setDiasVencimiento(Gral::getVars(2, "dias_vencimiento", 0));
	$gral_fp_cuota->setRecargo(Gral::getVars(2, "recargo", 0));
	$gral_fp_cuota->setCodigo(Gral::getVars(2, "codigo", ''));
	$gral_fp_cuota->setObservacion(Gral::getVars(2, "observacion", ''));
	$gral_fp_cuota->setOrden(Gral::getVars(2, "orden", 0));
	$gral_fp_cuota->setEstado(Gral::getVars(2, "estado", 0));
	$gral_fp_cuota->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$gral_fp_cuota->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$gral_fp_cuota->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$gral_fp_cuota->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $gral_fp_cuota->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/gral_fp_cuota/gral_fp_cuota_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_gral_fp_cuota' width='90%'>
        
				<tr>
				  <td  id="label_gral_fp_cuota_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_cuota_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_cuota_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='gral_fp_cuota_txt_descripcion' value='<?php Gral::_echoTxt($gral_fp_cuota->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_gral_fp_cuota_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
                    <tr>
                      <td id="label_gral_fp_cuota_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_forma_pago_id' ?>">

                        <?php Lang::_lang('GralFpFormaPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_gral_fp_cuota_cmb_gral_fp_forma_pago_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_gral_fp_forma_pago_id = Gral::getVars(1, 'cmb_gral_fp_forma_pago_id', 0);
					if(!Gral::esPost() and $gral_fp_cuota->getId()) $cmb_gral_fp_forma_pago_id = $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getId();			
					$c = new Criterio(GralFpFormaPago::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('gral_fp_forma_pago');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'gral_fp_cuota_cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbF(null, $c), Lang::_lang('Seleccione GralFpFormaPago', true)), $cmb_gral_fp_forma_pago_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="gral_fp_cuota_x" elemento_id="cmb_gral_fp_forma_pago_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA_CMB_EDIT_GRAL_FP_FORMA_PAGO')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="gral_fp_cuota_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='gral_fp_cuota_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_forma_pago_id" <?php echo ($cmb_gral_fp_forma_pago_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="gral_fp_cuota_cmb_gral_fp_forma_pago_id" clase_id="gral_fp_forma_pago" prefijo='gral_fp_cuota_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_gral_fp_cuota_cmb_gral_fp_forma_pago_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_gral_fp_cuota_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_gral_fp_forma_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_gral_fp_forma_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_forma_pago_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
                    <tr>
                      <td id="label_gral_fp_cuota_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_gral_fp_medio_pago_id' ?>">

                        <?php Lang::_lang('GralFpMedioPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>

                      </td>
                      <td id="dato_gral_fp_cuota_cmb_gral_fp_medio_pago_id" class='adm_carga_datos_datos' width=''>

                      <?php $error_input_css = ($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
                      <?php
                            $cmb_gral_fp_medio_pago_id = Gral::getVars(1, 'cmb_gral_fp_medio_pago_id', 0);
					if(!Gral::esPost() and $gral_fp_cuota->getId()) $cmb_gral_fp_medio_pago_id = $gral_fp_cuota->getGralFpMedioPago()->getId();			
					$c = new Criterio(GralFpMedioPago::SES_CRITERIOS);
					$c->add('gral_fp_forma_pago_id', $cmb_gral_fp_forma_pago_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('gral_fp_medio_pago');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'gral_fp_cuota_cmb_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c), Lang::_lang('Seleccione GralFpMedioPago', true)), $cmb_gral_fp_medio_pago_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="gral_fp_cuota_cmb_gral_fp_forma_pago_id" elemento_id="cmb_gral_fp_medio_pago_id"')?>
					
                        <?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA_CMB_EDIT_GRAL_FP_MEDIO_PAGO')){ ?>
                            <div class="div_botonera_cmb_alta_editar">
                                <img class="img_btn_editar" elemento_id="gral_fp_cuota_cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='gral_fp_cuota_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_fp_medio_pago_id" <?php echo ($cmb_gral_fp_medio_pago_id == '') ? "style='display:none;'" : '' ?> />

                                <img class="img_btn_agregar_nuevo" elemento_id="gral_fp_cuota_cmb_gral_fp_medio_pago_id" clase_id="gral_fp_medio_pago" prefijo='gral_fp_cuota_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                                <div class="div_modal_gral_fp_cuota_cmb_gral_fp_medio_pago_id"></div>
                            </div>
                        <?php } ?>

                        <?php if(Lang::_lang('help_gral_fp_cuota_alta_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                            <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                        <?php } ?>

                        <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_gral_fp_medio_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                            <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_gral_fp_medio_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                        <?php } ?>

                        <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_fp_medio_pago_id')->getMensaje()) ?></div>
                    </td>
                </tr>
		
				<tr>
				  <td  id="label_gral_fp_cuota_txt_cantidad" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad' ?>" >
				  
                                        <?php Lang::_lang('Cantidad', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_cuota_txt_cantidad" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_cuota_txt_cantidad' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='gral_fp_cuota_txt_cantidad' value='<?php Gral::_echoTxt($gral_fp_cuota->getCantidad(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_fp_cuota_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_cantidad', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_cantidad', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_cuota_cmb_por_default" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_por_default' ?>" >
				  
                                        <?php Lang::_lang('Por Default', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_cuota_cmb_por_default" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('por_default')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'gral_fp_cuota_cmb_por_default', GralSiNo::getGralSiNosCmb(), $gral_fp_cuota->getPorDefault(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_gral_fp_cuota_alta_por_default', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_por_default', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_por_default', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_por_default', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('por_default')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_cuota_txt_recargo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_recargo' ?>" >
				  
                                        <?php Lang::_lang('Recargo %', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_cuota_txt_recargo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('recargo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='gral_fp_cuota_txt_recargo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='gral_fp_cuota_txt_recargo' value='<?php Gral::_echoTxt($gral_fp_cuota->getRecargo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_gral_fp_cuota_alta_recargo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_recargo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_recargo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_recargo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('recargo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_gral_fp_cuota_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_gral_fp_cuota_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='gral_fp_cuota_txa_observacion' rows='10' cols='50' id='gral_fp_cuota_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($gral_fp_cuota->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_gral_fp_cuota_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_gral_fp_cuota_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_gral_fp_cuota_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_gral_fp_cuota_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($gral_fp_cuota->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_gral_fp_cuota_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='gral_fp_cuota'/>
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

