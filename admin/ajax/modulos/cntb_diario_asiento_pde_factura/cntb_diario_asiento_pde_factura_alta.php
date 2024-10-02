<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA')){
    echo "No tiene asignada la credencial CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA. ";
    return false;
}

$db_nombre_objeto = 'cntb_diario_asiento_pde_factura';
$db_nombre_pagina = 'cntb_diario_asiento_pde_factura_alta';

$cntb_diario_asiento_pde_factura = new CntbDiarioAsientoPdeFactura();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$cntb_diario_asiento_pde_factura = new CntbDiarioAsientoPdeFactura();
	if(trim($hdn_id) != '') $cntb_diario_asiento_pde_factura->setId($hdn_id, false);
	$cntb_diario_asiento_pde_factura->setCntbPeriodoId(Gral::getVars(1, "cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id", null));
	$cntb_diario_asiento_pde_factura->setCntbDiarioAsientoId(Gral::getVars(1, "cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id", null));
	$cntb_diario_asiento_pde_factura->setPdeFacturaId(Gral::getVars(1, "cntb_diario_asiento_pde_factura_cmb_pde_factura_id", null));
	$cntb_diario_asiento_pde_factura->setEstado(Gral::getVars(1, "cntb_diario_asiento_pde_factura_cmb_estado", 0));
	$cntb_diario_asiento_pde_factura->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_pde_factura_txt_creado")));
	$cntb_diario_asiento_pde_factura->setCreadoPor(Gral::getVars(1, "cntb_diario_asiento_pde_factura__creado_por", 0));
	$cntb_diario_asiento_pde_factura->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "cntb_diario_asiento_pde_factura_txt_modificado")));
	$cntb_diario_asiento_pde_factura->setModificadoPor(Gral::getVars(1, "cntb_diario_asiento_pde_factura__modificado_por", 0));

	$cntb_diario_asiento_pde_factura_estado = new CntbDiarioAsientoPdeFactura();
	if(trim($hdn_id) != ''){
		$cntb_diario_asiento_pde_factura_estado->setId($hdn_id);
		$cntb_diario_asiento_pde_factura->setEstado($cntb_diario_asiento_pde_factura_estado->getEstado());
				
	}else{
		$cntb_diario_asiento_pde_factura->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $cntb_diario_asiento_pde_factura->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_pde_factura->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: cntb_diario_asiento_pde_factura_alta.php?cs=1&id='.$cntb_diario_asiento_pde_factura->getId());
			}
		break;
		case 'guardarnvo':
			$error = $cntb_diario_asiento_pde_factura->control();
			if(!$error->getExisteError()){
				$cntb_diario_asiento_pde_factura->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: cntb_diario_asiento_pde_factura_alta.php?cs=1');
				$cntb_diario_asiento_pde_factura = new CntbDiarioAsientoPdeFactura();
			}
		break;
	}
	Gral::setSes('CntbDiarioAsientoPdeFactura_ULTIMO_INSERTADO', $cntb_diario_asiento_pde_factura->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_cntb_diario_asiento_pde_factura_id = Gral::getVars(2, $prefijo.'cmb_cntb_diario_asiento_pde_factura_id', 0);
	if($cmb_cntb_diario_asiento_pde_factura_id != 0){
		$cntb_diario_asiento_pde_factura = CntbDiarioAsientoPdeFactura::getOxId($cmb_cntb_diario_asiento_pde_factura_id);
	}else{
	
	$cntb_diario_asiento_pde_factura->setCntbPeriodoId(Gral::getVars(2, "cntb_periodo_id", 'null'));
	$cntb_diario_asiento_pde_factura->setCntbDiarioAsientoId(Gral::getVars(2, "cntb_diario_asiento_id", 'null'));
	$cntb_diario_asiento_pde_factura->setPdeFacturaId(Gral::getVars(2, "pde_factura_id", 'null'));
	$cntb_diario_asiento_pde_factura->setEstado(Gral::getVars(2, "estado", 0));
	$cntb_diario_asiento_pde_factura->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_pde_factura->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$cntb_diario_asiento_pde_factura->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$cntb_diario_asiento_pde_factura->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $cntb_diario_asiento_pde_factura->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/cntb_diario_asiento_pde_factura/cntb_diario_asiento_pde_factura_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_cntb_diario_asiento_pde_factura' width='90%'>
        
				<tr>
				  <td  id="label_cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_periodo_id' ?>" >
				  
                                        <?php Lang::_lang('CntbPeriodo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), $cntb_diario_asiento_pde_factura->getCntbPeriodoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA_CMB_EDIT_CNTB_PERIODO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_periodo_id" <?php echo ($cntb_diario_asiento_pde_factura->getCntbPeriodoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id" clase_id="cntb_periodo" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_pde_factura_cmb_cntb_periodo_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_cntb_periodo_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_cntb_periodo_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_periodo_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cntb_diario_asiento_id' ?>" >
				  
                                        <?php Lang::_lang('CntbDiarioAsiento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), $cntb_diario_asiento_pde_factura->getCntbDiarioAsientoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA_CMB_EDIT_CNTB_DIARIO_ASIENTO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_cntb_diario_asiento_id" <?php echo ($cntb_diario_asiento_pde_factura->getCntbDiarioAsientoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id" clase_id="cntb_diario_asiento" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_pde_factura_cmb_cntb_diario_asiento_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_cntb_diario_asiento_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_cntb_diario_asiento_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cntb_diario_asiento_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_cntb_diario_asiento_pde_factura_cmb_pde_factura_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_pde_factura_id' ?>" >
				  
                                        <?php Lang::_lang('PdeFactura', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_cntb_diario_asiento_pde_factura_cmb_pde_factura_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('pde_factura_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'cntb_diario_asiento_pde_factura_cmb_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), $cntb_diario_asiento_pde_factura->getPdeFacturaId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA_CMB_EDIT_PDE_FACTURA')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="cntb_diario_asiento_pde_factura_cmb_pde_factura_id" clase_id="pde_factura" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_pde_factura_id" <?php echo ($cntb_diario_asiento_pde_factura->getPdeFacturaId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="cntb_diario_asiento_pde_factura_cmb_pde_factura_id" clase_id="pde_factura" prefijo='cntb_diario_asiento_pde_factura_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_cntb_diario_asiento_pde_factura_cmb_pde_factura_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_cntb_diario_asiento_pde_factura_alta_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_pde_factura_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_cntb_diario_asiento_pde_factura_alta_pde_factura_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pde_factura_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($cntb_diario_asiento_pde_factura->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_cntb_diario_asiento_pde_factura_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='cntb_diario_asiento_pde_factura'/>
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

