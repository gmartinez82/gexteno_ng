<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA')){
    echo "No tiene asignada la credencial VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'vta_politica_descuento_ins_categoria';
$db_nombre_pagina = 'vta_politica_descuento_ins_categoria_alta';

$vta_politica_descuento_ins_categoria = new VtaPoliticaDescuentoInsCategoria();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$vta_politica_descuento_ins_categoria = new VtaPoliticaDescuentoInsCategoria();
	if(trim($hdn_id) != '') $vta_politica_descuento_ins_categoria->setId($hdn_id, false);
	$vta_politica_descuento_ins_categoria->setVtaPoliticaDescuentoId(Gral::getVars(1, "vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id", null));
	$vta_politica_descuento_ins_categoria->setInsCategoriaId(Gral::getVars(1, "vta_politica_descuento_ins_categoria_cmb_ins_categoria_id", null));
	$vta_politica_descuento_ins_categoria->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "vta_politica_descuento_ins_categoria_txt_creado")));
	$vta_politica_descuento_ins_categoria->setCreadoPor(Gral::getVars(1, "vta_politica_descuento_ins_categoria__creado_por", null));
	switch($accion){
		case 'guardar':
			$error = $vta_politica_descuento_ins_categoria->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento_ins_categoria->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: vta_politica_descuento_ins_categoria_alta.php?cs=1&id='.$vta_politica_descuento_ins_categoria->getId());
			}
		break;
		case 'guardarnvo':
			$error = $vta_politica_descuento_ins_categoria->control();
			if(!$error->getExisteError()){
				$vta_politica_descuento_ins_categoria->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: vta_politica_descuento_ins_categoria_alta.php?cs=1');
				$vta_politica_descuento_ins_categoria = new VtaPoliticaDescuentoInsCategoria();
			}
		break;
	}
	Gral::setSes('VtaPoliticaDescuentoInsCategoria_ULTIMO_INSERTADO', $vta_politica_descuento_ins_categoria->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_vta_politica_descuento_ins_categoria_id = Gral::getVars(2, $prefijo.'cmb_vta_politica_descuento_ins_categoria_id', 0);
	if($cmb_vta_politica_descuento_ins_categoria_id != 0){
		$vta_politica_descuento_ins_categoria = VtaPoliticaDescuentoInsCategoria::getOxId($cmb_vta_politica_descuento_ins_categoria_id);
	}else{
	
	$vta_politica_descuento_ins_categoria->setVtaPoliticaDescuentoId(Gral::getVars(2, "vta_politica_descuento_id", 'null'));
	$vta_politica_descuento_ins_categoria->setInsCategoriaId(Gral::getVars(2, "ins_categoria_id", 'null'));
	$vta_politica_descuento_ins_categoria->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$vta_politica_descuento_ins_categoria->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $vta_politica_descuento_ins_categoria->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/vta_politica_descuento_ins_categoria/vta_politica_descuento_ins_categoria_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_vta_politica_descuento_ins_categoria' width='90%'>
        
				<tr>
				  <td  id="label_vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_vta_politica_descuento_id' ?>" >
				  
                                        <?php Lang::_lang('VtaPoliticaDescuento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), $vta_politica_descuento_ins_categoria->getVtaPoliticaDescuentoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA_CMB_EDIT_VTA_POLITICA_DESCUENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_politica_descuento_ins_categoria_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_vta_politica_descuento_id" <?php echo ($vta_politica_descuento_ins_categoria->getVtaPoliticaDescuentoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo='vta_politica_descuento_ins_categoria_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_politica_descuento_ins_categoria_cmb_vta_politica_descuento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_politica_descuento_ins_categoria_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_ins_categoria_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_ins_categoria_alta_vta_politica_descuento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_ins_categoria_alta_vta_politica_descuento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('vta_politica_descuento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_vta_politica_descuento_ins_categoria_cmb_ins_categoria_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_categoria_id' ?>" >
				  
                                        <?php Lang::_lang('InsCategoria', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_vta_politica_descuento_ins_categoria_cmb_ins_categoria_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'vta_politica_descuento_ins_categoria_cmb_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), $vta_politica_descuento_ins_categoria->getInsCategoriaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA_CMB_EDIT_INS_CATEGORIA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="vta_politica_descuento_ins_categoria_cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='vta_politica_descuento_ins_categoria_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_categoria_id" <?php echo ($vta_politica_descuento_ins_categoria->getInsCategoriaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="vta_politica_descuento_ins_categoria_cmb_ins_categoria_id" clase_id="ins_categoria" prefijo='vta_politica_descuento_ins_categoria_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_vta_politica_descuento_ins_categoria_cmb_ins_categoria_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_vta_politica_descuento_ins_categoria_alta_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_vta_politica_descuento_ins_categoria_alta_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_vta_politica_descuento_ins_categoria_alta_ins_categoria_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_vta_politica_descuento_ins_categoria_alta_ins_categoria_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_categoria_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($vta_politica_descuento_ins_categoria->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_vta_politica_descuento_ins_categoria_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='vta_politica_descuento_ins_categoria'/>
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

