<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ALTA')){
    echo "No tiene asignada la credencial PDE_NOTA_DEBITO_PDE_RECIBO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_nota_debito_pde_recibo';
$db_nombre_pagina = 'pde_nota_debito_pde_recibo_alta';

$pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();
	if(trim($hdn_id) != '') $pde_nota_debito_pde_recibo->setId($hdn_id, false);
	$pde_nota_debito_pde_recibo->setDescripcion(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_descripcion"));
	$pde_nota_debito_pde_recibo->setPdeNotaDebitoId(Gral::getVars(1, "pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id", null));
	$pde_nota_debito_pde_recibo->setPdeReciboId(Gral::getVars(1, "pde_nota_debito_pde_recibo_cmb_pde_recibo_id", null));
	$pde_nota_debito_pde_recibo->setImporteAfectado(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_importe_afectado", 0)));
	$pde_nota_debito_pde_recibo->setCodigo(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_codigo"));
	$pde_nota_debito_pde_recibo->setObservacion(Gral::getVars(1, "pde_nota_debito_pde_recibo_txa_observacion"));
	$pde_nota_debito_pde_recibo->setOrden(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_orden", 0));
	$pde_nota_debito_pde_recibo->setEstado(Gral::getVars(1, "pde_nota_debito_pde_recibo_cmb_estado", 0));
	$pde_nota_debito_pde_recibo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_creado")));
	$pde_nota_debito_pde_recibo->setCreadoPor(Gral::getVars(1, "pde_nota_debito_pde_recibo__creado_por", 0));
	$pde_nota_debito_pde_recibo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_nota_debito_pde_recibo_txt_modificado")));
	$pde_nota_debito_pde_recibo->setModificadoPor(Gral::getVars(1, "pde_nota_debito_pde_recibo__modificado_por", 0));

	$pde_nota_debito_pde_recibo_estado = new PdeNotaDebitoPdeRecibo();
	if(trim($hdn_id) != ''){
		$pde_nota_debito_pde_recibo_estado->setId($hdn_id);
		$pde_nota_debito_pde_recibo->setEstado($pde_nota_debito_pde_recibo_estado->getEstado());
				
	}else{
		$pde_nota_debito_pde_recibo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_nota_debito_pde_recibo->control();
			if(!$error->getExisteError()){
				$pde_nota_debito_pde_recibo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_nota_debito_pde_recibo_alta.php?cs=1&id='.$pde_nota_debito_pde_recibo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_nota_debito_pde_recibo->control();
			if(!$error->getExisteError()){
				$pde_nota_debito_pde_recibo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_nota_debito_pde_recibo_alta.php?cs=1');
				$pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();
			}
		break;
	}
	Gral::setSes('PdeNotaDebitoPdeRecibo_ULTIMO_INSERTADO', $pde_nota_debito_pde_recibo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_nota_debito_pde_recibo_id = Gral::getVars(2, $prefijo.'cmb_pde_nota_debito_pde_recibo_id', 0);
	if($cmb_pde_nota_debito_pde_recibo_id != 0){
		$pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($cmb_pde_nota_debito_pde_recibo_id);
	}else{
	
	$pde_nota_debito_pde_recibo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_nota_debito_pde_recibo->setPdeNotaDebitoId(Gral::getVars(2, "pde_nota_debito_id", 'null'));
	$pde_nota_debito_pde_recibo->setPdeReciboId(Gral::getVars(2, "pde_recibo_id", 'null'));
	$pde_nota_debito_pde_recibo->setImporteAfectado(Gral::getVars(2, "importe_afectado", 0));
	$pde_nota_debito_pde_recibo->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_nota_debito_pde_recibo->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_nota_debito_pde_recibo->setOrden(Gral::getVars(2, "orden", 0));
	$pde_nota_debito_pde_recibo->setEstado(Gral::getVars(2, "estado", 0));
	$pde_nota_debito_pde_recibo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_nota_debito_pde_recibo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_nota_debito_pde_recibo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_nota_debito_pde_recibo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_nota_debito_pde_recibo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_nota_debito_pde_recibo/pde_nota_debito_pde_recibo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_nota_debito_pde_recibo' width='90%'>
        
				<tr>
				  <td  id="label_pde_nota_debito_pde_recibo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_debito_pde_recibo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_debito_pde_recibo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_debito_pde_recibo_txt_descripcion' value='<?php Gral::_echoTxt($pde_nota_debito_pde_recibo->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_nota_debito_pde_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_debito_pde_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_nota_debito_id' ?>" >
				  
                                        <?php Lang::_lang('PdeNotaDebito', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), $pde_nota_debito_pde_recibo->getPdeNotaDebitoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ALTA_CMB_EDIT_PDE_NOTA_DEBITO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='pde_nota_debito_pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_nota_debito_id" <?php echo ($pde_nota_debito_pde_recibo->getPdeNotaDebitoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id" clase_id="pde_nota_debito" prefijo='pde_nota_debito_pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_debito_pde_recibo_cmb_pde_nota_debito_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_debito_pde_recibo_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_debito_pde_recibo_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_pde_nota_debito_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_pde_nota_debito_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_nota_debito_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_debito_pde_recibo_cmb_pde_recibo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_recibo_id' ?>" >
				  
                                        <?php Lang::_lang('PdeRecibo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_debito_pde_recibo_cmb_pde_recibo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_nota_debito_pde_recibo_cmb_pde_recibo_id', Gral::getCmbFiltro(PdeRecibo::getPdeRecibosCmb(), '...'), $pde_nota_debito_pde_recibo->getPdeReciboId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ALTA_CMB_EDIT_PDE_RECIBO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_nota_debito_pde_recibo_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='pde_nota_debito_pde_recibo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_recibo_id" <?php echo ($pde_nota_debito_pde_recibo->getPdeReciboId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_nota_debito_pde_recibo_cmb_pde_recibo_id" clase_id="pde_recibo" prefijo='pde_nota_debito_pde_recibo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_nota_debito_pde_recibo_cmb_pde_recibo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_nota_debito_pde_recibo_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_debito_pde_recibo_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_pde_recibo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_pde_recibo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_recibo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_debito_pde_recibo_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_debito_pde_recibo_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_nota_debito_pde_recibo_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_nota_debito_pde_recibo_txt_codigo' value='<?php Gral::_echoTxt($pde_nota_debito_pde_recibo->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_nota_debito_pde_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_debito_pde_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_nota_debito_pde_recibo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_nota_debito_pde_recibo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_nota_debito_pde_recibo_txa_observacion' rows='10' cols='50' id='pde_nota_debito_pde_recibo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_nota_debito_pde_recibo->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_nota_debito_pde_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_nota_debito_pde_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_nota_debito_pde_recibo_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_nota_debito_pde_recibo->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_nota_debito_pde_recibo_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_nota_debito_pde_recibo'/>
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

