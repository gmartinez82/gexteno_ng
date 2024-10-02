<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ALTA')){
    echo "No tiene asignada la credencial PRV_PROVEEDOR_INS_MARCA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'prv_proveedor_ins_marca';
$db_nombre_pagina = 'prv_proveedor_ins_marca_alta';

$prv_proveedor_ins_marca = new PrvProveedorInsMarca();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$prv_proveedor_ins_marca = new PrvProveedorInsMarca();
	if(trim($hdn_id) != '') $prv_proveedor_ins_marca->setId($hdn_id, false);
	$prv_proveedor_ins_marca->setPrvProveedorId(Gral::getVars(1, "prv_proveedor_ins_marca_cmb_prv_proveedor_id", null));
	$prv_proveedor_ins_marca->setInsMarcaId(Gral::getVars(1, "prv_proveedor_ins_marca_cmb_ins_marca_id", null));
	$prv_proveedor_ins_marca->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "prv_proveedor_ins_marca_txt_creado")));
	$prv_proveedor_ins_marca->setCreadoPor(Gral::getVars(1, "prv_proveedor_ins_marca__creado_por", 0));
	switch($accion){
		case 'guardar':
			$error = $prv_proveedor_ins_marca->control();
			if(!$error->getExisteError()){
				$prv_proveedor_ins_marca->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: prv_proveedor_ins_marca_alta.php?cs=1&id='.$prv_proveedor_ins_marca->getId());
			}
		break;
		case 'guardarnvo':
			$error = $prv_proveedor_ins_marca->control();
			if(!$error->getExisteError()){
				$prv_proveedor_ins_marca->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: prv_proveedor_ins_marca_alta.php?cs=1');
				$prv_proveedor_ins_marca = new PrvProveedorInsMarca();
			}
		break;
	}
	Gral::setSes('PrvProveedorInsMarca_ULTIMO_INSERTADO', $prv_proveedor_ins_marca->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_prv_proveedor_ins_marca_id = Gral::getVars(2, $prefijo.'cmb_prv_proveedor_ins_marca_id', 0);
	if($cmb_prv_proveedor_ins_marca_id != 0){
		$prv_proveedor_ins_marca = PrvProveedorInsMarca::getOxId($cmb_prv_proveedor_ins_marca_id);
	}else{
	
	$prv_proveedor_ins_marca->setPrvProveedorId(Gral::getVars(2, "prv_proveedor_id", 'null'));
	$prv_proveedor_ins_marca->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$prv_proveedor_ins_marca->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$prv_proveedor_ins_marca->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $prv_proveedor_ins_marca->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_prv_proveedor_ins_marca' width='90%'>
        
				<tr>
				  <td  id="label_prv_proveedor_ins_marca_cmb_prv_proveedor_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_prv_proveedor_id' ?>" >
				  
                                        <?php Lang::_lang('PrvProveedor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_proveedor_ins_marca_cmb_prv_proveedor_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_proveedor_ins_marca_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $prv_proveedor_ins_marca->getPrvProveedorId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ALTA_CMB_EDIT_PRV_PROVEEDOR')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_proveedor_ins_marca_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_proveedor_ins_marca_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_prv_proveedor_id" <?php echo ($prv_proveedor_ins_marca->getPrvProveedorId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_proveedor_ins_marca_cmb_prv_proveedor_id" clase_id="prv_proveedor" prefijo='prv_proveedor_ins_marca_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_proveedor_ins_marca_cmb_prv_proveedor_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_proveedor_ins_marca_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_proveedor_ins_marca_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_proveedor_ins_marca_alta_prv_proveedor_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_proveedor_ins_marca_alta_prv_proveedor_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('prv_proveedor_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_prv_proveedor_ins_marca_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_prv_proveedor_ins_marca_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'prv_proveedor_ins_marca_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), $prv_proveedor_ins_marca->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ALTA_CMB_EDIT_INS_MARCA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="prv_proveedor_ins_marca_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_proveedor_ins_marca_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($prv_proveedor_ins_marca->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="prv_proveedor_ins_marca_cmb_ins_marca_id" clase_id="ins_marca" prefijo='prv_proveedor_ins_marca_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_prv_proveedor_ins_marca_cmb_ins_marca_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_prv_proveedor_ins_marca_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_prv_proveedor_ins_marca_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_prv_proveedor_ins_marca_alta_ins_marca_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_prv_proveedor_ins_marca_alta_ins_marca_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($prv_proveedor_ins_marca->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_prv_proveedor_ins_marca_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='prv_proveedor_ins_marca'/>
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

