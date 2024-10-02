<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_INSUMO_SIMILAR_ALTA')){
    echo "No tiene asignada la credencial INS_INSUMO_SIMILAR_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_insumo_similar';
$db_nombre_pagina = 'ins_insumo_similar_alta';

$ins_insumo_similar = new InsInsumoSimilar();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo_similar = new InsInsumoSimilar();
	if(trim($hdn_id) != '') $ins_insumo_similar->setId($hdn_id, false);
	$ins_insumo_similar->setInsInsumoId(Gral::getVars(1, "ins_insumo_similar_cmb_ins_insumo_id", null));
	$ins_insumo_similar->setInsInsumoSimilar(Gral::getVars(1, "ins_insumo_similar_cmb_ins_insumo_similar", null));
	$ins_insumo_similar->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_similar_txt_creado")));
	$ins_insumo_similar->setCreadoPor(Gral::getVars(1, "ins_insumo_similar__creado_por", null));
	$ins_insumo_similar->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_similar_txt_modificado")));
	$ins_insumo_similar->setModificadoPor(Gral::getVars(1, "ins_insumo_similar__modificado_por", null));
	switch($accion){
		case 'guardar':
			$error = $ins_insumo_similar->control();
			if(!$error->getExisteError()){
				$ins_insumo_similar->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_similar_alta.php?cs=1&id='.$ins_insumo_similar->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo_similar->control();
			if(!$error->getExisteError()){
				$ins_insumo_similar->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_similar_alta.php?cs=1');
				$ins_insumo_similar = new InsInsumoSimilar();
			}
		break;
	}
	Gral::setSes('InsInsumoSimilar_ULTIMO_INSERTADO', $ins_insumo_similar->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_similar_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_similar_id', 0);
	if($cmb_ins_insumo_similar_id != 0){
		$ins_insumo_similar = InsInsumoSimilar::getOxId($cmb_ins_insumo_similar_id);
	}else{
	
	$ins_insumo_similar->setInsInsumoId(Gral::getVars(2, "ins_insumo_id", 'null'));
	$ins_insumo_similar->setInsInsumoSimilar(Gral::getVars(2, "ins_insumo_similar", 'null'));
	$ins_insumo_similar->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo_similar->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo_similar->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo_similar->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo_similar->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_similar/ins_insumo_similar_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_similar' width='90%'>
        
				<tr>
				  <td  id="label_ins_insumo_similar_cmb_ins_insumo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_id' ?>" >
				  
                                        <?php Lang::_lang('InsInsumo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_similar_cmb_ins_insumo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_similar_cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $ins_insumo_similar->getInsInsumoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_SIMILAR_ALTA_CMB_EDIT_INS_INSUMO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="ins_insumo_similar_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_insumo_similar_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_insumo_id" <?php echo ($ins_insumo_similar->getInsInsumoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_similar_cmb_ins_insumo_id" clase_id="ins_insumo" prefijo='ins_insumo_similar_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_ins_insumo_similar_cmb_ins_insumo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_ins_insumo_similar_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_similar_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_similar_alta_ins_insumo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_similar_alta_ins_insumo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_insumo_similar_cmb_ins_insumo_similar" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_insumo_similar' ?>" >
				  
                                        <?php Lang::_lang('InsInsumoSimilar', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_similar_cmb_ins_insumo_similar" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_insumo_similar')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_similar_cmb_ins_insumo_similar', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), $ins_insumo_similar->getInsInsumoSimilar(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_insumo_similar_alta_ins_insumo_similar', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_insumo_similar_alta_ins_insumo_similar', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_insumo_similar_alta_ins_insumo_similar', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_insumo_similar_alta_ins_insumo_similar', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_insumo_similar')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo_similar->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_similar_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_similar'/>
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

