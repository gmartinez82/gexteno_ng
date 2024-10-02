<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de';
$db_nombre_pagina = 'eku_de_alta';

$eku_de = new EkuDe();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de = new EkuDe();
	if(trim($hdn_id) != '') $eku_de->setId($hdn_id, false);
	$eku_de->setDescripcion(Gral::getVars(1, "eku_de_txt_descripcion"));
	$eku_de->setEkuDeOpeTipoEstadoId(Gral::getVars(1, "eku_de_cmb_eku_de_ope_tipo_estado_id", null));
	$eku_de->setEkuDverfor(Gral::getVars(1, "eku_de_txt_eku_dverfor"));
	$eku_de->setEkuA002IdCdc(Gral::getVars(1, "eku_de_txt_eku_a002_id_cdc"));
	$eku_de->setEkuA003Ddvid(Gral::getVars(1, "eku_de_txt_eku_a003_ddvid"));
	$eku_de->setEkuA004Dfecfirma(Gral::getVars(1, "eku_de_txt_eku_a004_dfecfirma"));
	$eku_de->setEkuA005Dsisfact(Gral::getVars(1, "eku_de_txt_eku_a005_dsisfact"));
	$eku_de->setEkuDeXml(Gral::getVars(1, "eku_de_txa_eku_de_xml"));
	$eku_de->setEkuPp02IdCdc(Gral::getVars(1, "eku_de_txt_eku_pp02_id_cdc"));
	$eku_de->setEkuPp03Ddecproc(Gral::getVars(1, "eku_de_txt_eku_pp03_ddecproc"));
	$eku_de->setEkuPp04Ddigval(Gral::getVars(1, "eku_de_txt_eku_pp04_ddigval"));
	$eku_de->setEkuPp050Destres(Gral::getVars(1, "eku_de_txt_eku_pp050_destres"));
	$eku_de->setEkuPp051Dprotaut(Gral::getVars(1, "eku_de_txt_eku_pp051_dprotaut"));
	$eku_de->setCodigo(Gral::getVars(1, "eku_de_txt_codigo"));
	$eku_de->setObservacion(Gral::getVars(1, "eku_de_txa_observacion"));
	$eku_de->setOrden(Gral::getVars(1, "eku_de_txt_orden", 0));
	$eku_de->setEstado(Gral::getVars(1, "eku_de_cmb_estado", 0));
	$eku_de->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_txt_creado")));
	$eku_de->setCreadoPor(Gral::getVars(1, "eku_de__creado_por", 0));
	$eku_de->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_txt_modificado")));
	$eku_de->setModificadoPor(Gral::getVars(1, "eku_de__modificado_por", 0));

	$eku_de_estado = new EkuDe();
	if(trim($hdn_id) != ''){
		$eku_de_estado->setId($hdn_id);
		$eku_de->setEstado($eku_de_estado->getEstado());
				
	}else{
		$eku_de->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de->control();
			if(!$error->getExisteError()){
				$eku_de->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_alta.php?cs=1&id='.$eku_de->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de->control();
			if(!$error->getExisteError()){
				$eku_de->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_alta.php?cs=1');
				$eku_de = new EkuDe();
			}
		break;
	}
	Gral::setSes('EkuDe_ULTIMO_INSERTADO', $eku_de->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_id = Gral::getVars(2, $prefijo.'cmb_eku_de_id', 0);
	if($cmb_eku_de_id != 0){
		$eku_de = EkuDe::getOxId($cmb_eku_de_id);
	}else{
	
	$eku_de->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de->setEkuDeOpeTipoEstadoId(Gral::getVars(2, "eku_de_ope_tipo_estado_id", 'null'));
	$eku_de->setEkuDverfor(Gral::getVars(2, "eku_dverfor", ''));
	$eku_de->setEkuA002IdCdc(Gral::getVars(2, "eku_a002_id_cdc", ''));
	$eku_de->setEkuA003Ddvid(Gral::getVars(2, "eku_a003_ddvid", ''));
	$eku_de->setEkuA004Dfecfirma(Gral::getVars(2, "eku_a004_dfecfirma", ''));
	$eku_de->setEkuA005Dsisfact(Gral::getVars(2, "eku_a005_dsisfact", ''));
	$eku_de->setEkuDeXml(Gral::getVars(2, "eku_de_xml", ''));
	$eku_de->setEkuPp02IdCdc(Gral::getVars(2, "eku_pp02_id_cdc", ''));
	$eku_de->setEkuPp03Ddecproc(Gral::getVars(2, "eku_pp03_ddecproc", ''));
	$eku_de->setEkuPp04Ddigval(Gral::getVars(2, "eku_pp04_ddigval", ''));
	$eku_de->setEkuPp050Destres(Gral::getVars(2, "eku_pp050_destres", ''));
	$eku_de->setEkuPp051Dprotaut(Gral::getVars(2, "eku_pp051_dprotaut", ''));
	$eku_de->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de/eku_de_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_descripcion' value='<?php Gral::_echoTxt($eku_de->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_cmb_eku_de_ope_tipo_estado_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_ope_tipo_estado_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeOpeTipoEstado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_cmb_eku_de_ope_tipo_estado_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_ope_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_cmb_eku_de_ope_tipo_estado_id', Gral::getCmbFiltro(EkuDeOpeTipoEstado::getEkuDeOpeTipoEstadosCmb(), '...'), $eku_de->getEkuDeOpeTipoEstadoId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_CMB_EDIT_EKU_DE_OPE_TIPO_ESTADO')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_cmb_eku_de_ope_tipo_estado_id" clase_id="eku_de_ope_tipo_estado" prefijo='eku_de_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_ope_tipo_estado_id" <?php echo ($eku_de->getEkuDeOpeTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_cmb_eku_de_ope_tipo_estado_id" clase_id="eku_de_ope_tipo_estado" prefijo='eku_de_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_cmb_eku_de_ope_tipo_estado_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_de_ope_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_de_ope_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_de_ope_tipo_estado_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_de_ope_tipo_estado_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_ope_tipo_estado_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_dverfor" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_dverfor' ?>" >
				  
                                        <?php Lang::_lang('eku_dverfor', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_dverfor" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_dverfor')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_dverfor' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_dverfor' value='<?php Gral::_echoTxt($eku_de->getEkuDverfor(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_dverfor', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_dverfor', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_dverfor', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_dverfor', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_dverfor')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_a002_id_cdc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_a002_id_cdc' ?>" >
				  
                                        <?php Lang::_lang('eku_a002_id_cdc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_a002_id_cdc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_a002_id_cdc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_a002_id_cdc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_a002_id_cdc' value='<?php Gral::_echoTxt($eku_de->getEkuA002IdCdc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_a002_id_cdc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_a002_id_cdc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_a002_id_cdc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_a002_id_cdc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_a002_id_cdc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_a003_ddvid" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_a003_ddvid' ?>" >
				  
                                        <?php Lang::_lang('eku_a003_ddvid', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_a003_ddvid" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_a003_ddvid')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_a003_ddvid' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_a003_ddvid' value='<?php Gral::_echoTxt($eku_de->getEkuA003Ddvid(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_a003_ddvid', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_a003_ddvid', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_a003_ddvid', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_a003_ddvid', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_a003_ddvid')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_a004_dfecfirma" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_a004_dfecfirma' ?>" >
				  
                                        <?php Lang::_lang('eku_a004_dfecfirma', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_a004_dfecfirma" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_a004_dfecfirma')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_a004_dfecfirma' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_a004_dfecfirma' value='<?php Gral::_echoTxt($eku_de->getEkuA004Dfecfirma(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_a004_dfecfirma', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_a004_dfecfirma', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_a004_dfecfirma', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_a004_dfecfirma', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_a004_dfecfirma')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_a005_dsisfact" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_a005_dsisfact' ?>" >
				  
                                        <?php Lang::_lang('eku_a005_dsisfact', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_a005_dsisfact" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_a005_dsisfact')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_a005_dsisfact' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_a005_dsisfact' value='<?php Gral::_echoTxt($eku_de->getEkuA005Dsisfact(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_a005_dsisfact', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_a005_dsisfact', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_a005_dsisfact', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_a005_dsisfact', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_a005_dsisfact')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txa_eku_de_xml" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_xml' ?>" >
				  
                                        <?php Lang::_lang('eku_de_xml', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txa_eku_de_xml" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_xml')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_txa_eku_de_xml' rows='5' cols='50' id='eku_de_txa_eku_de_xml' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de->getEkuDeXml(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_de_xml', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_de_xml', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_de_xml', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_de_xml', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_xml')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_pp02_id_cdc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_pp02_id_cdc' ?>" >
				  
                                        <?php Lang::_lang('eku_pp02_id_cdc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_pp02_id_cdc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_pp02_id_cdc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_pp02_id_cdc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_pp02_id_cdc' value='<?php Gral::_echoTxt($eku_de->getEkuPp02IdCdc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_pp02_id_cdc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_pp02_id_cdc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_pp02_id_cdc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_pp02_id_cdc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_pp02_id_cdc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_pp03_ddecproc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_pp03_ddecproc' ?>" >
				  
                                        <?php Lang::_lang('eku_pp03_ddecproc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_pp03_ddecproc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_pp03_ddecproc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_pp03_ddecproc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_pp03_ddecproc' value='<?php Gral::_echoTxt($eku_de->getEkuPp03Ddecproc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_pp03_ddecproc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_pp03_ddecproc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_pp03_ddecproc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_pp03_ddecproc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_pp03_ddecproc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_pp04_ddigval" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_pp04_ddigval' ?>" >
				  
                                        <?php Lang::_lang('eku_pp04_ddigval', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_pp04_ddigval" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_pp04_ddigval')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_pp04_ddigval' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_pp04_ddigval' value='<?php Gral::_echoTxt($eku_de->getEkuPp04Ddigval(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_pp04_ddigval', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_pp04_ddigval', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_pp04_ddigval', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_pp04_ddigval', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_pp04_ddigval')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_pp050_destres" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_pp050_destres' ?>" >
				  
                                        <?php Lang::_lang('eku_pp050_destres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_pp050_destres" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_pp050_destres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_pp050_destres' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_pp050_destres' value='<?php Gral::_echoTxt($eku_de->getEkuPp050Destres(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_pp050_destres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_pp050_destres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_pp050_destres', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_pp050_destres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_pp050_destres')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_eku_pp051_dprotaut" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_pp051_dprotaut' ?>" >
				  
                                        <?php Lang::_lang('eku_pp051_dprotaut', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_eku_pp051_dprotaut" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_pp051_dprotaut')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_eku_pp051_dprotaut' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_eku_pp051_dprotaut' value='<?php Gral::_echoTxt($eku_de->getEkuPp051Dprotaut(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_eku_pp051_dprotaut', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_eku_pp051_dprotaut', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_eku_pp051_dprotaut', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_eku_pp051_dprotaut', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_pp051_dprotaut')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_txt_codigo' value='<?php Gral::_echoTxt($eku_de->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_txa_observacion' rows='10' cols='50' id='eku_de_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de'/>
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

