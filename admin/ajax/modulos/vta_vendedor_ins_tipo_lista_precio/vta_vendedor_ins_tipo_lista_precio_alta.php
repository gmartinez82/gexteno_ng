<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA')){
    echo "No tiene asignada la credencial VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_vendedor_ins_tipo_lista_precio';
$db_nombre_pagina = 'vta_vendedor_ins_tipo_lista_precio_alta';

$vta_vendedor_ins_tipo_lista_precio = new VtaVendedorInsTipoListaPrecio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_vendedor_ins_tipo_lista_precio = new VtaVendedorInsTipoListaPrecio();
	if(trim($hdn_id) != '') $vta_vendedor_ins_tipo_lista_precio->setId($hdn_id, false);
	$vta_vendedor_ins_tipo_lista_precio->setDescripcion(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txt_descripcion"));
	$vta_vendedor_ins_tipo_lista_precio->setVtaVendedorId(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id", null));
	$vta_vendedor_ins_tipo_lista_precio->setInsTipoListaPrecioId(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id", null));
	$vta_vendedor_ins_tipo_lista_precio->setCodigo(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txt_codigo"));
	$vta_vendedor_ins_tipo_lista_precio->setObservacion(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txa_observacion"));
	$vta_vendedor_ins_tipo_lista_precio->setOrden(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txt_orden", 0));
	$vta_vendedor_ins_tipo_lista_precio->setEstado(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_cmb_estado", 0));
	$vta_vendedor_ins_tipo_lista_precio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txt_creado")));
	$vta_vendedor_ins_tipo_lista_precio->setCreadoPor(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio__creado_por", 0));
	$vta_vendedor_ins_tipo_lista_precio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio_txt_modificado")));
	$vta_vendedor_ins_tipo_lista_precio->setModificadoPor(Gral::getVars(1, "vta_vendedor_ins_tipo_lista_precio__modificado_por", 0));

	$vta_vendedor_ins_tipo_lista_precio_estado = new VtaVendedorInsTipoListaPrecio();
	if(trim($hdn_id) != ''){
		$vta_vendedor_ins_tipo_lista_precio_estado->setId($hdn_id);
		$vta_vendedor_ins_tipo_lista_precio->setEstado($vta_vendedor_ins_tipo_lista_precio_estado->getEstado());
				
	}else{
		$vta_vendedor_ins_tipo_lista_precio->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $vta_vendedor_ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$vta_vendedor_ins_tipo_lista_precio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_vendedor_ins_tipo_lista_precio_alta.php?cs=1&id='.$vta_vendedor_ins_tipo_lista_precio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_vendedor_ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$vta_vendedor_ins_tipo_lista_precio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_vendedor_ins_tipo_lista_precio_alta.php?cs=1');
				$vta_vendedor_ins_tipo_lista_precio = new VtaVendedorInsTipoListaPrecio();
			}
		break;
	}
	Gral::setSes('VtaVendedorInsTipoListaPrecio_ULTIMO_INSERTADO', $vta_vendedor_ins_tipo_lista_precio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_vendedor_ins_tipo_lista_precio_id = Gral::getVars(2, $prefijo.'cmb_vta_vendedor_ins_tipo_lista_precio_id', 0);
	if($cmb_vta_vendedor_ins_tipo_lista_precio_id != 0){
		$vta_vendedor_ins_tipo_lista_precio = VtaVendedorInsTipoListaPrecio::getOxId($cmb_vta_vendedor_ins_tipo_lista_precio_id);
	}else{
	
	$vta_vendedor_ins_tipo_lista_precio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$vta_vendedor_ins_tipo_lista_precio->setVtaVendedorId(Gral::getVars(2, "vta_vendedor_id", 'null'));
	$vta_vendedor_ins_tipo_lista_precio->setInsTipoListaPrecioId(Gral::getVars(2, "ins_tipo_lista_precio_id", 'null'));
	$vta_vendedor_ins_tipo_lista_precio->setCodigo(Gral::getVars(2, "codigo", ''));
	$vta_vendedor_ins_tipo_lista_precio->setObservacion(Gral::getVars(2, "observacion", ''));
	$vta_vendedor_ins_tipo_lista_precio->setOrden(Gral::getVars(2, "orden", 0));
	$vta_vendedor_ins_tipo_lista_precio->setEstado(Gral::getVars(2, "estado", 0));
	$vta_vendedor_ins_tipo_lista_precio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_vendedor_ins_tipo_lista_precio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$vta_vendedor_ins_tipo_lista_precio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$vta_vendedor_ins_tipo_lista_precio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_vendedor_ins_tipo_lista_precio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_vendedor_ins_tipo_lista_precio/vta_vendedor_ins_tipo_lista_precio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_vendedor_ins_tipo_lista_precio' width='90%'>
        
				<tr>
				  <td  id="label_vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_vendedor_id' ?>" >
				  
                                        <?php Lang::_lang('VtaVendedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_vendedor_ins_tipo_lista_precio->getVtaVendedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA_CMB_EDIT_VTA_VENDEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_ins_tipo_lista_precio_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_vendedor_id" <?php echo ($vta_vendedor_ins_tipo_lista_precio->getVtaVendedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id" clase_id="vta_vendedor" prefijo='vta_vendedor_ins_tipo_lista_precio_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_ins_tipo_lista_precio_cmb_vta_vendedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_vta_vendedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_vta_vendedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_vendedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_tipo_lista_precio_id' ?>" >
				  
                                        <?php Lang::_lang('InsTipoListaPrecio', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), $vta_vendedor_ins_tipo_lista_precio->getInsTipoListaPrecioId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA_CMB_EDIT_INS_TIPO_LISTA_PRECIO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='vta_vendedor_ins_tipo_lista_precio_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_tipo_lista_precio_id" <?php echo ($vta_vendedor_ins_tipo_lista_precio->getInsTipoListaPrecioId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id" clase_id="ins_tipo_lista_precio" prefijo='vta_vendedor_ins_tipo_lista_precio_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_vendedor_ins_tipo_lista_precio_cmb_ins_tipo_lista_precio_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_ins_tipo_lista_precio_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_ins_tipo_lista_precio_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_tipo_lista_precio_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_vendedor_ins_tipo_lista_precio_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_vendedor_ins_tipo_lista_precio_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='vta_vendedor_ins_tipo_lista_precio_txa_observacion' rows='10' cols='50' id='vta_vendedor_ins_tipo_lista_precio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($vta_vendedor_ins_tipo_lista_precio->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_vendedor_ins_tipo_lista_precio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_vendedor_ins_tipo_lista_precio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_vendedor_ins_tipo_lista_precio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_vendedor_ins_tipo_lista_precio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_vendedor_ins_tipo_lista_precio'/>
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

