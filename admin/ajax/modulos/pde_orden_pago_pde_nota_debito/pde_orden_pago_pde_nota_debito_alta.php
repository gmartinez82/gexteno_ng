<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_ALTA')){
    echo "No tiene asignada la credencial PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_orden_pago_pde_nota_debito';
$db_nombre_pagina = 'pde_orden_pago_pde_nota_debito_alta';

$pde_orden_pago_pde_nota_debito = new PdeOrdenPagoPdeNotaDebito();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_orden_pago_pde_nota_debito = new PdeOrdenPagoPdeNotaDebito();
	if(trim($hdn_id) != '') $pde_orden_pago_pde_nota_debito->setId($hdn_id, false);
	$pde_orden_pago_pde_nota_debito->setDescripcion(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_descripcion"));
	$pde_orden_pago_pde_nota_debito->setPdeOrdenPagoId(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id", null));
	$pde_orden_pago_pde_nota_debito->setPdeNotaDebitoId(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id", null));
	$pde_orden_pago_pde_nota_debito->setImporteAfectado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_importe_afectado", 0)));
	$pde_orden_pago_pde_nota_debito->setCodigo(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_codigo"));
	$pde_orden_pago_pde_nota_debito->setObservacion(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txa_observacion"));
	$pde_orden_pago_pde_nota_debito->setOrden(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_orden", 0));
	$pde_orden_pago_pde_nota_debito->setEstado(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_cmb_estado", 0));
	$pde_orden_pago_pde_nota_debito->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_creado")));
	$pde_orden_pago_pde_nota_debito->setCreadoPor(Gral::getVars(1, "pde_orden_pago_pde_nota_debito__creado_por", 0));
	$pde_orden_pago_pde_nota_debito->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_orden_pago_pde_nota_debito_txt_modificado")));
	$pde_orden_pago_pde_nota_debito->setModificadoPor(Gral::getVars(1, "pde_orden_pago_pde_nota_debito__modificado_por", 0));

	$pde_orden_pago_pde_nota_debito_estado = new PdeOrdenPagoPdeNotaDebito();
	if(trim($hdn_id) != ''){
		$pde_orden_pago_pde_nota_debito_estado->setId($hdn_id);
		$pde_orden_pago_pde_nota_debito->setEstado($pde_orden_pago_pde_nota_debito_estado->getEstado());
				
	}else{
		$pde_orden_pago_pde_nota_debito->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_orden_pago_pde_nota_debito->control();
			if(!$error->getExisteError()){
				$pde_orden_pago_pde_nota_debito->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_orden_pago_pde_nota_debito_alta.php?cs=1&id='.$pde_orden_pago_pde_nota_debito->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_orden_pago_pde_nota_debito->control();
			if(!$error->getExisteError()){
				$pde_orden_pago_pde_nota_debito->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_orden_pago_pde_nota_debito_alta.php?cs=1');
				$pde_orden_pago_pde_nota_debito = new PdeOrdenPagoPdeNotaDebito();
			}
		break;
	}
	Gral::setSes('PdeOrdenPagoPdeNotaDebito_ULTIMO_INSERTADO', $pde_orden_pago_pde_nota_debito->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_orden_pago_pde_nota_debito_id = Gral::getVars(2, $prefijo.'cmb_pde_orden_pago_pde_nota_debito_id', 0);
	if($cmb_pde_orden_pago_pde_nota_debito_id != 0){
		$pde_orden_pago_pde_nota_debito = PdeOrdenPagoPdeNotaDebito::getOxId($cmb_pde_orden_pago_pde_nota_debito_id);
	}else{
	
	$pde_orden_pago_pde_nota_debito->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_orden_pago_pde_nota_debito->setPdeOrdenPagoId(Gral::getVars(2, "pde_orden_pago_id", 'null'));
	$pde_orden_pago_pde_nota_debito->setPdeNotaDebitoId(Gral::getVars(2, "pde_nota_debito_id", 'null'));
	$pde_orden_pago_pde_nota_debito->setImporteAfectado(Gral::getVars(2, "importe_afectado", 0));
	$pde_orden_pago_pde_nota_debito->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_orden_pago_pde_nota_debito->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_orden_pago_pde_nota_debito->setOrden(Gral::getVars(2, "orden", 0));
	$pde_orden_pago_pde_nota_debito->setEstado(Gral::getVars(2, "estado", 0));
	$pde_orden_pago_pde_nota_debito->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_orden_pago_pde_nota_debito->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_orden_pago_pde_nota_debito->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_orden_pago_pde_nota_debito->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_orden_pago_pde_nota_debito->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_orden_pago_pde_nota_debito/pde_orden_pago_pde_nota_debito_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_orden_pago_pde_nota_debito' width='90%'>
        
				<tr>
				  <td  id="label_pde_orden_pago_pde_nota_debito_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_pde_nota_debito_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_orden_pago_pde_nota_debito_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_orden_pago_pde_nota_debito_txt_descripcion' value='<?php Gral::_echoTxt($pde_orden_pago_pde_nota_debito->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_orden_pago_id' ?>" >
				  
                                        <?php Lang::_lang('PdeOrdenPago', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), $pde_orden_pago_pde_nota_debito->getPdeOrdenPagoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_ALTA_CMB_EDIT_PDE_ORDEN_PAGO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_orden_pago_pde_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_orden_pago_id" <?php echo ($pde_orden_pago_pde_nota_debito->getPdeOrdenPagoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id" clase_id="pde_orden_pago" prefijo='pde_orden_pago_pde_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_pde_nota_debito_cmb_pde_orden_pago_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_pde_orden_pago_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_pde_orden_pago_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_orden_pago_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), $pde_orden_pago_pde_nota_debito->getPdeNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_ALTA_CMB_EDIT_PDE_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='pde_orden_pago_pde_nota_debito_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_debito_id" <?php echo ($pde_orden_pago_pde_nota_debito->getPdeNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='pde_orden_pago_pde_nota_debito_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_orden_pago_pde_nota_debito_cmb_pde_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_pde_nota_debito_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_pde_nota_debito_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_orden_pago_pde_nota_debito_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_orden_pago_pde_nota_debito_txt_codigo' value='<?php Gral::_echoTxt($pde_orden_pago_pde_nota_debito->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_orden_pago_pde_nota_debito_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_orden_pago_pde_nota_debito_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_orden_pago_pde_nota_debito_txa_observacion' rows='10' cols='50' id='pde_orden_pago_pde_nota_debito_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_orden_pago_pde_nota_debito->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_orden_pago_pde_nota_debito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_orden_pago_pde_nota_debito_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_orden_pago_pde_nota_debito->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_orden_pago_pde_nota_debito_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_orden_pago_pde_nota_debito'/>
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

