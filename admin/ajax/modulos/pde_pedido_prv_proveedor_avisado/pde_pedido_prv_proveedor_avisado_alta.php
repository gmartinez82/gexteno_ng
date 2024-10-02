<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA')){
    echo "No tiene asignada la credencial PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_pedido_prv_proveedor_avisado';
$db_nombre_pagina = 'pde_pedido_prv_proveedor_avisado_alta';

$pde_pedido_prv_proveedor_avisado = new PdePedidoPrvProveedorAvisado();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_pedido_prv_proveedor_avisado = new PdePedidoPrvProveedorAvisado();
	if(trim($hdn_id) != '') $pde_pedido_prv_proveedor_avisado->setId($hdn_id, false);
	$pde_pedido_prv_proveedor_avisado->setPdePedidoId(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id", null));
	$pde_pedido_prv_proveedor_avisado->setPrvProveedorId(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id", null));
	$pde_pedido_prv_proveedor_avisado->setEnviadoA(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_txt_enviado_a"));
	$pde_pedido_prv_proveedor_avisado->setLeido(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_cmb_leido", 0));
	$pde_pedido_prv_proveedor_avisado->setLeidoEl(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_txt_leido_el")));
	$pde_pedido_prv_proveedor_avisado->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_txt_creado")));
	$pde_pedido_prv_proveedor_avisado->setCreadoPor(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado__creado_por", null));
	$pde_pedido_prv_proveedor_avisado->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado_txt_modificado")));
	$pde_pedido_prv_proveedor_avisado->setModificadoPor(Gral::getVars(1, "pde_pedido_prv_proveedor_avisado__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $pde_pedido_prv_proveedor_avisado->control();
			if(!$error->getExisteError()){
				$pde_pedido_prv_proveedor_avisado->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_pedido_prv_proveedor_avisado_alta.php?cs=1&id='.$pde_pedido_prv_proveedor_avisado->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_pedido_prv_proveedor_avisado->control();
			if(!$error->getExisteError()){
				$pde_pedido_prv_proveedor_avisado->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_pedido_prv_proveedor_avisado_alta.php?cs=1');
				$pde_pedido_prv_proveedor_avisado = new PdePedidoPrvProveedorAvisado();
			}
		break;
	}
	Gral::setSes('PdePedidoPrvProveedorAvisado_ULTIMO_INSERTADO', $pde_pedido_prv_proveedor_avisado->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_pedido_prv_proveedor_avisado_id = Gral::getVars(2, $prefijo.'cmb_pde_pedido_prv_proveedor_avisado_id', 0);
	if($cmb_pde_pedido_prv_proveedor_avisado_id != 0){
		$pde_pedido_prv_proveedor_avisado = PdePedidoPrvProveedorAvisado::getOxId($cmb_pde_pedido_prv_proveedor_avisado_id);
	}else{
	
	$pde_pedido_prv_proveedor_avisado->setPdePedidoId(Gral::getVars(2, "pde_pedido_id", 'null'));
	$pde_pedido_prv_proveedor_avisado->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$pde_pedido_prv_proveedor_avisado->setEnviadoA(Gral::getVars(2, "enviado_a", ''));
	$pde_pedido_prv_proveedor_avisado->setLeido(Gral::getVars(2, "leido", 0));
	$pde_pedido_prv_proveedor_avisado->setLeidoEl(Gral::getVars(2, "leido_el", date('Y-m-d H:m:s')));
	$pde_pedido_prv_proveedor_avisado->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_pedido_prv_proveedor_avisado->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$pde_pedido_prv_proveedor_avisado->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$pde_pedido_prv_proveedor_avisado->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_pedido_prv_proveedor_avisado->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_pedido_prv_proveedor_avisado' width='90%'>
        
				<tr>
				  <td  id="label_pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdePedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), $pde_pedido_prv_proveedor_avisado->getPdePedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA_CMB_EDIT_PDE_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_pedido_prv_proveedor_avisado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_pedido_id" <?php echo ($pde_pedido_prv_proveedor_avisado->getPdePedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id" clase_id="pde_pedido" prefijo='pde_pedido_prv_proveedor_avisado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_prv_proveedor_avisado_cmb_pde_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_pde_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_pde_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_pedido_prv_proveedor_avisado->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_pedido_prv_proveedor_avisado_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($pde_pedido_prv_proveedor_avisado->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='pde_pedido_prv_proveedor_avisado_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_pedido_prv_proveedor_avisado_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_prv_proveedor_avisado_txt_enviado_a" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_enviado_a' ?>" >
				  
                                        <?php Lang::_lang('Destinatario', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_prv_proveedor_avisado_txt_enviado_a" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('enviado_a')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_prv_proveedor_avisado_txt_enviado_a' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_pedido_prv_proveedor_avisado_txt_enviado_a' value='<?php Gral::_echoTxt($pde_pedido_prv_proveedor_avisado->getEnviadoA(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_enviado_a', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_enviado_a', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_enviado_a', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_enviado_a', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('enviado_a')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_prv_proveedor_avisado_cmb_leido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido' ?>" >
				  
                                        <?php Lang::_lang('Leido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_prv_proveedor_avisado_cmb_leido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_pedido_prv_proveedor_avisado_cmb_leido', GralSiNo::getGralSiNosCmb(), $pde_pedido_prv_proveedor_avisado->getLeido(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_leido', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_leido', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_leido', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_leido', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_pedido_prv_proveedor_avisado_txt_leido_el" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_leido_el' ?>" >
				  
                                        <?php Lang::_lang('Leido El', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_pedido_prv_proveedor_avisado_txt_leido_el" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('leido_el')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='pde_pedido_prv_proveedor_avisado_txt_leido_el' type='text' class='textbox <?php echo $error_input_css ?> ' id='pde_pedido_prv_proveedor_avisado_txt_leido_el' value='<?php Gral::_echoTxt(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getLeidoEl()), true) ?>' size='40' />
					<input type='button' id='cal_pde_pedido_prv_proveedor_avisado_txt_leido_el' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'pde_pedido_prv_proveedor_avisado_txt_leido_el', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_pde_pedido_prv_proveedor_avisado_txt_leido_el'
						});
					</script>
		            
                    <?php if(Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_leido_el', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_pedido_prv_proveedor_avisado_alta_leido_el', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_leido_el', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_pedido_prv_proveedor_avisado_alta_leido_el', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('leido_el')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_pedido_prv_proveedor_avisado->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_pedido_prv_proveedor_avisado_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_pedido_prv_proveedor_avisado'/>
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

