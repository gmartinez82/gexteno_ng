<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA')){
    echo "No tiene asignada la credencial PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA. ";
    return false;
}

$db_nombre_objeto = 'pde_centro_pedido_pde_centro_recepcion';
$db_nombre_pagina = 'pde_centro_pedido_pde_centro_recepcion_alta';

$pde_centro_pedido_pde_centro_recepcion = new PdeCentroPedidoPdeCentroRecepcion();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$pde_centro_pedido_pde_centro_recepcion = new PdeCentroPedidoPdeCentroRecepcion();
	if(trim($hdn_id) != '') $pde_centro_pedido_pde_centro_recepcion->setId($hdn_id, false);
	$pde_centro_pedido_pde_centro_recepcion->setPdeCentroPedidoId(Gral::getVars(1, "pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id", null));
	$pde_centro_pedido_pde_centro_recepcion->setPdeCentroRecepcionId(Gral::getVars(1, "pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id", null));
	$pde_centro_pedido_pde_centro_recepcion->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "pde_centro_pedido_pde_centro_recepcion_txt_creado")));
	$pde_centro_pedido_pde_centro_recepcion->setCreadoPor(Gral::getVars(1, "pde_centro_pedido_pde_centro_recepcion__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $pde_centro_pedido_pde_centro_recepcion->control();
			if(!$error->getExisteError()){
				$pde_centro_pedido_pde_centro_recepcion->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: pde_centro_pedido_pde_centro_recepcion_alta.php?cs=1&id='.$pde_centro_pedido_pde_centro_recepcion->getId());
			}
		break;
		case 'guardarnvo':
			$error = $pde_centro_pedido_pde_centro_recepcion->control();
			if(!$error->getExisteError()){
				$pde_centro_pedido_pde_centro_recepcion->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: pde_centro_pedido_pde_centro_recepcion_alta.php?cs=1');
				$pde_centro_pedido_pde_centro_recepcion = new PdeCentroPedidoPdeCentroRecepcion();
			}
		break;
	}
	Gral::setSes('PdeCentroPedidoPdeCentroRecepcion_ULTIMO_INSERTADO', $pde_centro_pedido_pde_centro_recepcion->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_pde_centro_pedido_pde_centro_recepcion_id = Gral::getVars(2, $prefijo.'cmb_pde_centro_pedido_pde_centro_recepcion_id', 0);
	if($cmb_pde_centro_pedido_pde_centro_recepcion_id != 0){
		$pde_centro_pedido_pde_centro_recepcion = PdeCentroPedidoPdeCentroRecepcion::getOxId($cmb_pde_centro_pedido_pde_centro_recepcion_id);
	}else{
	
	$pde_centro_pedido_pde_centro_recepcion->setPdeCentroPedidoId(Gral::getVars(2, "pde_centro_pedido_id", 'null'));
	$pde_centro_pedido_pde_centro_recepcion->setPdeCentroRecepcionId(Gral::getVars(2, "pde_centro_recepcion_id", 'null'));
	$pde_centro_pedido_pde_centro_recepcion->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$pde_centro_pedido_pde_centro_recepcion->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $pde_centro_pedido_pde_centro_recepcion->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/pde_centro_pedido_pde_centro_recepcion/pde_centro_pedido_pde_centro_recepcion_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_pde_centro_pedido_pde_centro_recepcion' width='90%'>
        
				<tr>
				  <td  id="label_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_pedido_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroPedido', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $pde_centro_pedido_pde_centro_recepcion->getPdeCentroPedidoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA_CMB_EDIT_PDE_CENTRO_PEDIDO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_centro_pedido_pde_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_pedido_id" <?php echo ($pde_centro_pedido_pde_centro_recepcion->getPdeCentroPedidoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id" clase_id="pde_centro_pedido" prefijo='pde_centro_pedido_pde_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_pedido_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_pedido_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_pedido_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_pedido_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_centro_recepcion_id' ?>" >
				  
                                        <?php Lang::_lang('PdeCentroRecepcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $pde_centro_pedido_pde_centro_recepcion->getPdeCentroRecepcionId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA_CMB_EDIT_PDE_CENTRO_RECEPCION')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_centro_pedido_pde_centro_recepcion_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_centro_recepcion_id" <?php echo ($pde_centro_pedido_pde_centro_recepcion->getPdeCentroRecepcionId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id" clase_id="pde_centro_recepcion" prefijo='pde_centro_pedido_pde_centro_recepcion_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_pde_centro_pedido_pde_centro_recepcion_cmb_pde_centro_recepcion_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_recepcion_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_pde_centro_pedido_pde_centro_recepcion_alta_pde_centro_recepcion_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_centro_recepcion_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_centro_pedido_pde_centro_recepcion->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_pde_centro_pedido_pde_centro_recepcion_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='pde_centro_pedido_pde_centro_recepcion'/>
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

