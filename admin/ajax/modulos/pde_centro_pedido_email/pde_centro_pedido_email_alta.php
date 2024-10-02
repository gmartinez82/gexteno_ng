<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_EMAIL_ALTA')){
    echo "No tiene asignada la credencial PDE_CENTRO_PEDIDO_EMAIL_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_centro_pedido_email';
$db_nombre_pagina = 'pde_centro_pedido_email_alta';

$pde_centro_pedido_email = new PdeCentroPedidoEmail();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_centro_pedido_email = new PdeCentroPedidoEmail();
	if(trim($hdn_id) != '') $pde_centro_pedido_email->setId($hdn_id, false);
	$pde_centro_pedido_email->setDescripcion(Gral::getVars(1, "pde_centro_pedido_email_txt_descripcion"));
	$pde_centro_pedido_email->setPdeCentroPedidoId(Gral::getVars(1, "pde_centro_pedido_email_cmb_pde_centro_pedido_id", null));
	$pde_centro_pedido_email->setCodigo(Gral::getVars(1, "pde_centro_pedido_email_txt_codigo"));
	$pde_centro_pedido_email->setObservacion(Gral::getVars(1, "pde_centro_pedido_email_txa_observacion"));
	$pde_centro_pedido_email->setOrden(Gral::getVars(1, "pde_centro_pedido_email_txt_orden", 0));
	$pde_centro_pedido_email->setEstado(Gral::getVars(1, "pde_centro_pedido_email__estado", 0));
	$pde_centro_pedido_email->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_centro_pedido_email_txt_creado")));
	$pde_centro_pedido_email->setCreadoPor(Gral::getVars(1, "pde_centro_pedido_email__creado_por", 0));
	$pde_centro_pedido_email->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_centro_pedido_email_txt_modificado")));
	$pde_centro_pedido_email->setModificadoPor(Gral::getVars(1, "pde_centro_pedido_email__modificado_por", 0));

	$pde_centro_pedido_email_estado = new PdeCentroPedidoEmail();
	if(trim($hdn_id) != ''){
		$pde_centro_pedido_email_estado->setId($hdn_id);
		$pde_centro_pedido_email->setEstado($pde_centro_pedido_email_estado->getEstado());
				
	}else{
		$pde_centro_pedido_email->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $pde_centro_pedido_email->control();
			if(!$error->getExisteError()){
				$pde_centro_pedido_email->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_centro_pedido_email_alta.php?cs=1&id='.$pde_centro_pedido_email->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_centro_pedido_email->control();
			if(!$error->getExisteError()){
				$pde_centro_pedido_email->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_centro_pedido_email_alta.php?cs=1');
				$pde_centro_pedido_email = new PdeCentroPedidoEmail();
			}
		break;
	}
	Gral::setSes('PdeCentroPedidoEmail_ULTIMO_INSERTADO', $pde_centro_pedido_email->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_centro_pedido_email_id = Gral::getVars(2, $prefijo.'cmb_pde_centro_pedido_email_id', 0);
	if($cmb_pde_centro_pedido_email_id != 0){
		$pde_centro_pedido_email = PdeCentroPedidoEmail::getOxId($cmb_pde_centro_pedido_email_id);
	}else{
	
	$pde_centro_pedido_email->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$pde_centro_pedido_email->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_centro_pedido_email->setCodigo(Gral::getVars(2, "codigo", ''));
	$pde_centro_pedido_email->setObservacion(Gral::getVars(2, "observacion", ''));
	$pde_centro_pedido_email->setOrden(Gral::getVars(2, "orden", 0));
	$pde_centro_pedido_email->setEstado(Gral::getVars(2, "estado", 0));
	$pde_centro_pedido_email->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_centro_pedido_email->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_centro_pedido_email->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_centro_pedido_email->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_centro_pedido_email->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_centro_pedido_email' width='90%'>
        
				<tr>
				  <td  id="label_pde_centro_pedido_email_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Email', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_pedido_email_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_centro_pedido_email_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_centro_pedido_email_txt_descripcion' value='<?php Gral::_echoTxt($pde_centro_pedido_email->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_pde_centro_pedido_email_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_pedido_email_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_pedido_email_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_pedido_email_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_pedido_email_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_pedido_email_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_centro_pedido_email_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_centro_pedido_email->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_EMAIL_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_centro_pedido_email_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_centro_pedido_email_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_centro_pedido_email->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_pedido_email_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_centro_pedido_email_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_centro_pedido_email_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_centro_pedido_email_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_pedido_email_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_pedido_email_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_pedido_email_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_pedido_email_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_pedido_email_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='pde_centro_pedido_email_txa_observacion' rows='10' cols='50' id='pde_centro_pedido_email_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($pde_centro_pedido_email->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_pde_centro_pedido_email_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_pedido_email_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_pedido_email_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_pedido_email_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_centro_pedido_email->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_centro_pedido_email_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_centro_pedido_email'/>
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

