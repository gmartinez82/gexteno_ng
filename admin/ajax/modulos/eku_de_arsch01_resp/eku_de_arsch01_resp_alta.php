<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_ALTA')){
    echo "No tiene asignada la credencial EKU_DE_ARSCH01_RESP_ALTA. ";
    return false;
}

$db_nombre_objeto = 'eku_de_arsch01_resp';
$db_nombre_pagina = 'eku_de_arsch01_resp_alta';

$eku_de_arsch01_resp = new EkuDeArsch01Resp();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$eku_de_arsch01_resp = new EkuDeArsch01Resp();
	if(trim($hdn_id) != '') $eku_de_arsch01_resp->setId($hdn_id, false);
	$eku_de_arsch01_resp->setDescripcion(Gral::getVars(1, "eku_de_arsch01_resp_txt_descripcion"));
	$eku_de_arsch01_resp->setEkuDeId(Gral::getVars(1, "eku_de_arsch01_resp_cmb_eku_de_id", null));
	$eku_de_arsch01_resp->setEkuDeAsch01ReqId(Gral::getVars(1, "eku_de_arsch01_resp_cmb_eku_de_asch01_req_id", null));
	$eku_de_arsch01_resp->setEkuArsch01Pp02IdCdc(Gral::getVars(1, "eku_de_arsch01_resp_txt_eku_arsch01_pp02_id_cdc"));
	$eku_de_arsch01_resp->setEkuArsch01Pp03Ddecproc(Gral::getVars(1, "eku_de_arsch01_resp_txa_eku_arsch01_pp03_ddecproc"));
	$eku_de_arsch01_resp->setEkuArsch01Pp04Ddigval(Gral::getVars(1, "eku_de_arsch01_resp_txa_eku_arsch01_pp04_ddigval"));
	$eku_de_arsch01_resp->setEkuArsch01Pp050Destres(Gral::getVars(1, "eku_de_arsch01_resp_txa_eku_arsch01_pp050_destres"));
	$eku_de_arsch01_resp->setEkuArsch01Pp051Dprotaut(Gral::getVars(1, "eku_de_arsch01_resp_txa_eku_arsch01_pp051_dprotaut"));
	$eku_de_arsch01_resp->setCodigo(Gral::getVars(1, "eku_de_arsch01_resp_txt_codigo"));
	$eku_de_arsch01_resp->setObservacion(Gral::getVars(1, "eku_de_arsch01_resp_txa_observacion"));
	$eku_de_arsch01_resp->setOrden(Gral::getVars(1, "eku_de_arsch01_resp_txt_orden", 0));
	$eku_de_arsch01_resp->setEstado(Gral::getVars(1, "eku_de_arsch01_resp_cmb_estado", 0));
	$eku_de_arsch01_resp->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_arsch01_resp_txt_creado")));
	$eku_de_arsch01_resp->setCreadoPor(Gral::getVars(1, "eku_de_arsch01_resp__creado_por", 0));
	$eku_de_arsch01_resp->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "eku_de_arsch01_resp_txt_modificado")));
	$eku_de_arsch01_resp->setModificadoPor(Gral::getVars(1, "eku_de_arsch01_resp__modificado_por", 0));

	$eku_de_arsch01_resp_estado = new EkuDeArsch01Resp();
	if(trim($hdn_id) != ''){
		$eku_de_arsch01_resp_estado->setId($hdn_id);
		$eku_de_arsch01_resp->setEstado($eku_de_arsch01_resp_estado->getEstado());
				
	}else{
		$eku_de_arsch01_resp->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $eku_de_arsch01_resp->control();
			if(!$error->getExisteError()){
				$eku_de_arsch01_resp->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: eku_de_arsch01_resp_alta.php?cs=1&id='.$eku_de_arsch01_resp->getId());
			}
		break;
		case 'guardarnvo':
			$error = $eku_de_arsch01_resp->control();
			if(!$error->getExisteError()){
				$eku_de_arsch01_resp->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: eku_de_arsch01_resp_alta.php?cs=1');
				$eku_de_arsch01_resp = new EkuDeArsch01Resp();
			}
		break;
	}
	Gral::setSes('EkuDeArsch01Resp_ULTIMO_INSERTADO', $eku_de_arsch01_resp->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_eku_de_arsch01_resp_id = Gral::getVars(2, $prefijo.'cmb_eku_de_arsch01_resp_id', 0);
	if($cmb_eku_de_arsch01_resp_id != 0){
		$eku_de_arsch01_resp = EkuDeArsch01Resp::getOxId($cmb_eku_de_arsch01_resp_id);
	}else{
	
	$eku_de_arsch01_resp->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$eku_de_arsch01_resp->setEkuDeId(Gral::getVars(2, "eku_de_id", 'null'));
	$eku_de_arsch01_resp->setEkuDeAsch01ReqId(Gral::getVars(2, "eku_de_asch01_req_id", 'null'));
	$eku_de_arsch01_resp->setEkuArsch01Pp02IdCdc(Gral::getVars(2, "eku_arsch01_pp02_id_cdc", ''));
	$eku_de_arsch01_resp->setEkuArsch01Pp03Ddecproc(Gral::getVars(2, "eku_arsch01_pp03_ddecproc", ''));
	$eku_de_arsch01_resp->setEkuArsch01Pp04Ddigval(Gral::getVars(2, "eku_arsch01_pp04_ddigval", ''));
	$eku_de_arsch01_resp->setEkuArsch01Pp050Destres(Gral::getVars(2, "eku_arsch01_pp050_destres", ''));
	$eku_de_arsch01_resp->setEkuArsch01Pp051Dprotaut(Gral::getVars(2, "eku_arsch01_pp051_dprotaut", ''));
	$eku_de_arsch01_resp->setCodigo(Gral::getVars(2, "codigo", ''));
	$eku_de_arsch01_resp->setObservacion(Gral::getVars(2, "observacion", ''));
	$eku_de_arsch01_resp->setOrden(Gral::getVars(2, "orden", 0));
	$eku_de_arsch01_resp->setEstado(Gral::getVars(2, "estado", 0));
	$eku_de_arsch01_resp->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$eku_de_arsch01_resp->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$eku_de_arsch01_resp->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$eku_de_arsch01_resp->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $eku_de_arsch01_resp->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/eku_de_arsch01_resp/eku_de_arsch01_resp_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_eku_de_arsch01_resp' width='90%'>
        
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_arsch01_resp_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_arsch01_resp_txt_descripcion' value='<?php Gral::_echoTxt($eku_de_arsch01_resp->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_cmb_eku_de_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDe', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_cmb_eku_de_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_arsch01_resp_cmb_eku_de_id', Gral::getCmbFiltro(EkuDe::getEkuDesCmb(), '...'), $eku_de_arsch01_resp->getEkuDeId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_ALTA_CMB_EDIT_EKU_DE')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_arsch01_resp_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_arsch01_resp_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_id" <?php echo ($eku_de_arsch01_resp->getEkuDeId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_arsch01_resp_cmb_eku_de_id" clase_id="eku_de" prefijo='eku_de_arsch01_resp_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_arsch01_resp_cmb_eku_de_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_de_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_de_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_cmb_eku_de_asch01_req_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_de_asch01_req_id' ?>" >
				  
                                        <?php Lang::_lang('EkuDeAsch01Req', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_cmb_eku_de_asch01_req_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_de_asch01_req_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'eku_de_arsch01_resp_cmb_eku_de_asch01_req_id', Gral::getCmbFiltro(EkuDeAsch01Req::getEkuDeAsch01ReqsCmb(), '...'), $eku_de_arsch01_resp->getEkuDeAsch01ReqId(), 'textbox '.$error_input_css)?>
		
                <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_ALTA_CMB_EDIT_EKU_DE_ASCH01_REQ')){ ?>
                    <div class="div_botonera_cmb_alta_editar">
                        <img class="img_btn_editar" elemento_id="eku_de_arsch01_resp_cmb_eku_de_asch01_req_id" clase_id="eku_de_asch01_req" prefijo='eku_de_arsch01_resp_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_eku_de_asch01_req_id" <?php echo ($eku_de_arsch01_resp->getEkuDeAsch01ReqId() == 'null') ? "style='display:none;'" : '' ?> />

                        <img class="img_btn_agregar_nuevo" elemento_id="eku_de_arsch01_resp_cmb_eku_de_asch01_req_id" clase_id="eku_de_asch01_req" prefijo='eku_de_arsch01_resp_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
                        <div class="div_modal_eku_de_arsch01_resp_cmb_eku_de_asch01_req_id"></div>
                    </div>
		<?php } ?> 
		            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_de_asch01_req_id', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_de_asch01_req_id', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_de_asch01_req_id', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_de_asch01_req_id', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_de_asch01_req_id')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txt_eku_arsch01_pp02_id_cdc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_arsch01_pp02_id_cdc' ?>" >
				  
                                        <?php Lang::_lang('eku_arsch01_pp02_id_cdc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txt_eku_arsch01_pp02_id_cdc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_arsch01_pp02_id_cdc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_arsch01_resp_txt_eku_arsch01_pp02_id_cdc' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_arsch01_resp_txt_eku_arsch01_pp02_id_cdc' value='<?php Gral::_echoTxt($eku_de_arsch01_resp->getEkuArsch01Pp02IdCdc(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp02_id_cdc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp02_id_cdc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp02_id_cdc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp02_id_cdc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_arsch01_pp02_id_cdc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txa_eku_arsch01_pp03_ddecproc" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_arsch01_pp03_ddecproc' ?>" >
				  
                                        <?php Lang::_lang('eku_arsch01_pp03_ddecproc', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txa_eku_arsch01_pp03_ddecproc" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_arsch01_pp03_ddecproc')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_arsch01_resp_txa_eku_arsch01_pp03_ddecproc' rows='5' cols='50' id='eku_de_arsch01_resp_txa_eku_arsch01_pp03_ddecproc' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_arsch01_resp->getEkuArsch01Pp03Ddecproc(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp03_ddecproc', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp03_ddecproc', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp03_ddecproc', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp03_ddecproc', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_arsch01_pp03_ddecproc')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txa_eku_arsch01_pp04_ddigval" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_arsch01_pp04_ddigval' ?>" >
				  
                                        <?php Lang::_lang('eku_arsch01_pp04_ddigval', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txa_eku_arsch01_pp04_ddigval" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_arsch01_pp04_ddigval')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_arsch01_resp_txa_eku_arsch01_pp04_ddigval' rows='5' cols='50' id='eku_de_arsch01_resp_txa_eku_arsch01_pp04_ddigval' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_arsch01_resp->getEkuArsch01Pp04Ddigval(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp04_ddigval', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp04_ddigval', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp04_ddigval', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp04_ddigval', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_arsch01_pp04_ddigval')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txa_eku_arsch01_pp050_destres" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_arsch01_pp050_destres' ?>" >
				  
                                        <?php Lang::_lang('eku_arsch01_pp050_destres', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txa_eku_arsch01_pp050_destres" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_arsch01_pp050_destres')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_arsch01_resp_txa_eku_arsch01_pp050_destres' rows='5' cols='50' id='eku_de_arsch01_resp_txa_eku_arsch01_pp050_destres' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_arsch01_resp->getEkuArsch01Pp050Destres(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp050_destres', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp050_destres', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp050_destres', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp050_destres', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_arsch01_pp050_destres')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txa_eku_arsch01_pp051_dprotaut" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_eku_arsch01_pp051_dprotaut' ?>" >
				  
                                        <?php Lang::_lang('eku_arsch01_pp051_dprotaut', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txa_eku_arsch01_pp051_dprotaut" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('eku_arsch01_pp051_dprotaut')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_arsch01_resp_txa_eku_arsch01_pp051_dprotaut' rows='5' cols='50' id='eku_de_arsch01_resp_txa_eku_arsch01_pp051_dprotaut' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_arsch01_resp->getEkuArsch01Pp051Dprotaut(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp051_dprotaut', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_eku_arsch01_pp051_dprotaut', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp051_dprotaut', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_eku_arsch01_pp051_dprotaut', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('eku_arsch01_pp051_dprotaut')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='eku_de_arsch01_resp_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='eku_de_arsch01_resp_txt_codigo' value='<?php Gral::_echoTxt($eku_de_arsch01_resp->getCodigo(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_eku_de_arsch01_resp_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observacion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_eku_de_arsch01_resp_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='eku_de_arsch01_resp_txa_observacion' rows='10' cols='50' id='eku_de_arsch01_resp_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($eku_de_arsch01_resp->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_eku_de_arsch01_resp_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_eku_de_arsch01_resp_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_eku_de_arsch01_resp_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_eku_de_arsch01_resp_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($eku_de_arsch01_resp->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_eku_de_arsch01_resp_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='eku_de_arsch01_resp'/>
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

