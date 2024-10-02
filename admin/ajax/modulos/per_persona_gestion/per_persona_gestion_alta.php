<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona';
$db_nombre_pagina = 'per_persona_alta';

$per_persona = new PerPersona();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$per_persona = new PerPersona();
	if(trim($hdn_id) != '') $per_persona->setId($hdn_id, false);
	$per_persona->setLegajo(Gral::getVars(1, "per_persona_txt_legajo"));
	$per_persona->setDescripcion(Gral::getVars(1, "per_persona_txt_descripcion"));
	$per_persona->setGralEmpresaId(Gral::getVars(1, "per_persona_cmb_gral_empresa_id", null));
	$per_persona->setCoSectorId(Gral::getVars(1, "per_persona_cmb_co_sector_id", null));
	$per_persona->setGralAreaId(Gral::getVars(1, "per_persona_cmb_gral_area_id", null));
	$per_persona->setGralSectorId(Gral::getVars(1, "per_persona_cmb_gral_sector_id", null));
	$per_persona->setGralPuestoId(Gral::getVars(1, "per_persona_cmb_gral_puesto_id", null));
	$per_persona->setGralEmpresaSectorId(Gral::getVars(1, "per_persona_cmb_gral_empresa_sector_id", null));
	$per_persona->setGralTipoDocumentoId(Gral::getVars(1, "per_persona_cmb_gral_tipo_documento_id", null));
	$per_persona->setDocumento(Gral::getVars(1, "per_persona_txt_documento"));
	$per_persona->setApellido(Gral::getVars(1, "per_persona_txt_apellido"));
	$per_persona->setNombre(Gral::getVars(1, "per_persona_txt_nombre"));
	$per_persona->setCuil(Gral::getVars(1, "per_persona_txt_cuil"));
	$per_persona->setNacimiento(Gral::getFechaToDb(Gral::getVars(1, "per_persona_txt_nacimiento")));
	$per_persona->setGralSexoId(Gral::getVars(1, "per_persona_cmb_gral_sexo_id", null));
	$per_persona->setGeoLocalidadId(Gral::getVars(1, "per_persona_cmb_geo_localidad_id", null));
	$per_persona->setCodigoPostal(Gral::getVars(1, "per_persona_txt_codigo_postal"));
	$per_persona->setFechaAlta(Gral::getFechaToDb(Gral::getVars(1, "per_persona_txt_fecha_alta")));
	$per_persona->setFechaBaja(Gral::getFechaToDb(Gral::getVars(1, "per_persona_txt_fecha_baja")));
	$per_persona->setNacionalidad(Gral::getVars(1, "per_persona_cmb_nacionalidad", null));
	$per_persona->setCodigo(Gral::getVars(1, "per_persona_txt_codigo"));
	$per_persona->setCodigoCredencial(Gral::getVars(1, "per_persona_txt_codigo_credencial"));
	$per_persona->setHash(Gral::getVars(1, "per_persona_txt_hash"));
	$per_persona->setPerTipoEstadoId(Gral::getVars(1, "per_persona_cmb_per_tipo_estado_id", null));
	$per_persona->setSincroEstado(Gral::getVars(1, "per_persona_txt_sincro_estado", 0));
	$per_persona->setSincroFecha(Gral::getFechaHoraToDb(Gral::getVars(1, "per_persona_txt_sincro_fecha")));
	$per_persona->setSincroCodigo(Gral::getVars(1, "per_persona_txt_sincro_codigo"));
	$per_persona->setSncrProcesoId(Gral::getVars(1, "per_persona_dbsug_sncr_proceso_id", null));
	$per_persona->setObservacion(Gral::getVars(1, "per_persona_txa_observacion"));
	$per_persona->setOrden(Gral::getVars(1, "per_persona_txt_orden", 0));
	$per_persona->setEstado(Gral::getVars(1, "per_persona_cmb_estado", 0));
	$per_persona->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_persona_txt_creado")));
	$per_persona->setCreadoPor(Gral::getVars(1, "per_persona__creado_por", 0));
	$per_persona->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "per_persona_txt_modificado")));
	$per_persona->setModificadoPor(Gral::getVars(1, "per_persona__modificado_por", 0));

	$per_persona_estado = new PerPersona();
	if(trim($hdn_id) != ''){
		$per_persona_estado->setId($hdn_id);
		$per_persona->setEstado($per_persona_estado->getEstado());
				
	}else{
		$per_persona->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $per_persona->control();
			if(!$error->getExisteError()){
				$per_persona->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: per_persona_alta.php?cs=1&id='.$per_persona->getId());
			}
		break;
		case 'guardarnvo':
			$error = $per_persona->control();
			if(!$error->getExisteError()){
				$per_persona->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: per_persona_alta.php?cs=1');
				$per_persona = new PerPersona();
			}
		break;
	}
	Gral::setSes('PerPersona_ULTIMO_INSERTADO', $per_persona->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_per_persona_id = Gral::getVars(2, $prefijo.'cmb_per_persona_id', 0);
	if($cmb_per_persona_id != 0){
		$per_persona = PerPersona::getOxId($cmb_per_persona_id);
	}else{
	
	$per_persona->setLegajo(Gral::getVars(2, "legajo", ''));
	$per_persona->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$per_persona->setGralEmpresaId(Gral::getVars(2, "gral_empresa_id", 'null'));
	$per_persona->setCoSectorId(Gral::getVars(2, "co_sector_id", 'null'));
	$per_persona->setGralAreaId(Gral::getVars(2, "gral_area_id", 'null'));
	$per_persona->setGralSectorId(Gral::getVars(2, "gral_sector_id", 'null'));
	$per_persona->setGralPuestoId(Gral::getVars(2, "gral_puesto_id", 'null'));
	$per_persona->setGralEmpresaSectorId(Gral::getVars(2, "gral_empresa_sector_id", 'null'));
	$per_persona->setGralTipoDocumentoId(Gral::getVars(2, "gral_tipo_documento_id", 'null'));
	$per_persona->setDocumento(Gral::getVars(2, "documento", ''));
	$per_persona->setApellido(Gral::getVars(2, "apellido", ''));
	$per_persona->setNombre(Gral::getVars(2, "nombre", ''));
	$per_persona->setCuil(Gral::getVars(2, "cuil", ''));
	$per_persona->setNacimiento(Gral::getVars(2, "nacimiento", date('Y-m-d')));
	$per_persona->setGralSexoId(Gral::getVars(2, "gral_sexo_id", 'null'));
	$per_persona->setGeoLocalidadId(Gral::getVars(2, "geo_localidad_id", 'null'));
	$per_persona->setCodigoPostal(Gral::getVars(2, "codigo_postal", ''));
	$per_persona->setFechaAlta(Gral::getVars(2, "fecha_alta", date('Y-m-d')));
	$per_persona->setFechaBaja(Gral::getVars(2, "fecha_baja", date('Y-m-d')));
	$per_persona->setNacionalidad(Gral::getVars(2, "nacionalidad", 'null'));
	$per_persona->setCodigo(Gral::getVars(2, "codigo", ''));
	$per_persona->setCodigoCredencial(Gral::getVars(2, "codigo_credencial", ''));
	$per_persona->setHash(Gral::getVars(2, "hash", ''));
	$per_persona->setPerTipoEstadoId(Gral::getVars(2, "per_tipo_estado_id", 'null'));
	$per_persona->setSincroEstado(Gral::getVars(2, "sincro_estado", 0));
	$per_persona->setSincroFecha(Gral::getVars(2, "sincro_fecha", date('Y-m-d H:m:s')));
	$per_persona->setSincroCodigo(Gral::getVars(2, "sincro_codigo", ''));
	$per_persona->setSncrProcesoId(Gral::getVars(2, "sncr_proceso_id", 'null'));
	$per_persona->setObservacion(Gral::getVars(2, "observacion", ''));
	$per_persona->setOrden(Gral::getVars(2, "orden", 0));
	$per_persona->setEstado(Gral::getVars(2, "estado", 0));
	$per_persona->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$per_persona->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$per_persona->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$per_persona->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $per_persona->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/per_persona/per_persona_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_per_persona'>
        
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Legajo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_legajo', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_legajo', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_legajo">

					<?php $error_input_css = ($error->getErrorXIndice('legajo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_legajo' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_persona_txt_legajo' value='<?php Gral::_echoTxt($per_persona->getLegajo(), true) ?>' size='20' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('legajo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralEmpresa') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_empresa_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_empresa_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralEmpresaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_EMPRESA')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_empresa_id" <?php echo ($per_persona->getGralEmpresaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_empresa_id" clase_id="gral_empresa" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_empresa_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_empresa_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='200' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('CoCentroOperativo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_co_centro_operativo_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_co_centro_operativo_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='350' class='adm_carga_datos_datos' id="dato_per_persona_cmb_co_centro_operativo_id">

				  <?php $error_input_css = ($error->getErrorXIndice('co_centro_operativo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  <?php
					$cmb_co_centro_operativo_id = Gral::getVars(1, 'cmb_co_centro_operativo_id', 0);
					if(!Gral::esPost() and $per_persona->getId()) $cmb_co_centro_operativo_id = $per_persona->getCoSector()->getCoCentroOperativo()->getId();			
					$c = new Criterio(CoCentroOperativo::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('co_centro_operativo');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'per_persona_cmb_co_centro_operativo_id', Gral::getCmbFiltro(CoCentroOperativo::getCoCentroOperativosCmbF(null, $c, true), Lang::_lang('Seleccione ...', true)), $cmb_co_centro_operativo_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="per_persona_x" elemento_id="cmb_co_centro_operativo_id"')?>
					
         <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_CO_CENTRO_OPERATIVO')){ ?>
		 <img class="img_btn_editar" elemento_id="per_persona_cmb_co_centro_operativo_id" clase_id="co_centro_operativo" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_co_centro_operativo_id" <?php echo ($cmb_co_centro_operativo_id == '') ? "style='display:none;'" : '' ?> />
		 
         <img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_co_centro_operativo_id" clase_id="co_centro_operativo" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_co_centro_operativo_id"></div>
		 <?php } ?>
		 
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('co_centro_operativo_id')->getMensaje()) ?></div>
				  </td>
				</tr>
		
				<tr>
				  <td width='200' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('CoSector') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_co_sector_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_co_sector_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='350' class='adm_carga_datos_datos' id="dato_per_persona_cmb_co_sector_id">

				  <?php $error_input_css = ($error->getErrorXIndice('co_sector_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  <?php
					$cmb_co_sector_id = Gral::getVars(1, 'cmb_co_sector_id', 0);
					if(!Gral::esPost() and $per_persona->getId()) $cmb_co_sector_id = $per_persona->getCoSector()->getId();			
					$c = new Criterio(CoSector::SES_CRITERIOS);
					$c->add('co_centro_operativo_id', $cmb_co_centro_operativo_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('co_sector');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'per_persona_cmb_co_sector_id', Gral::getCmbFiltro(CoSector::getCoSectorsCmbF(null, $c, true), Lang::_lang('Seleccione ...', true)), $cmb_co_sector_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="per_persona_cmb_co_centro_operativo_id" elemento_id="cmb_co_sector_id"')?>
					
         <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_CO_SECTOR')){ ?>
		 <img class="img_btn_editar" elemento_id="per_persona_cmb_co_sector_id" clase_id="co_sector" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_co_sector_id" <?php echo ($cmb_co_sector_id == '') ? "style='display:none;'" : '' ?> />
		 
         <img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_co_sector_id" clase_id="co_sector" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_co_sector_id"></div>
		 <?php } ?>
		 
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('co_sector_id')->getMensaje()) ?></div>
				  </td>
				</tr>
		
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralArea') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_area_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_area_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_area_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_area_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_area_id', Gral::getCmbFiltro(GralArea::getGralAreasCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralAreaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_AREA')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_area_id" clase_id="gral_area" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_area_id" <?php echo ($per_persona->getGralAreaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_area_id" clase_id="gral_area" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_area_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_area_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralSector') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sector_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sector_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_sector_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_sector_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_sector_id', Gral::getCmbFiltro(GralSector::getGralSectorsCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralSectorId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_SECTOR')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_sector_id" clase_id="gral_sector" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sector_id" <?php echo ($per_persona->getGralSectorId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_sector_id" clase_id="gral_sector" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_sector_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sector_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralPuesto') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_puesto_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_puesto_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_puesto_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_puesto_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_puesto_id', Gral::getCmbFiltro(GralPuesto::getGralPuestosCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralPuestoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_PUESTO')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_puesto_id" clase_id="gral_puesto" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_puesto_id" <?php echo ($per_persona->getGralPuestoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_puesto_id" clase_id="gral_puesto" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_puesto_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_puesto_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralTipoDocumento') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_documento_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_tipo_documento_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_tipo_documento_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralTipoDocumentoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_TIPO_DOCUMENTO')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_tipo_documento_id" <?php echo ($per_persona->getGralTipoDocumentoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_tipo_documento_id" clase_id="gral_tipo_documento" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_tipo_documento_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_tipo_documento_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Documento') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_documento', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_documento', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_documento">

					<?php $error_input_css = ($error->getErrorXIndice('documento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_documento' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_persona_txt_documento' value='<?php Gral::_echoTxt($per_persona->getDocumento(), true) ?>' size='20' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('documento')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Apellido') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_apellido', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_apellido', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_apellido">

					<?php $error_input_css = ($error->getErrorXIndice('apellido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_apellido' type='text' class='textbox <?php echo $error_input_css ?> mayuscula' id='per_persona_txt_apellido' value='<?php Gral::_echoTxt($per_persona->getApellido(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('apellido')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Nombre') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nombre', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nombre', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_nombre">

					<?php $error_input_css = ($error->getErrorXIndice('nombre')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_nombre' type='text' class='textbox <?php echo $error_input_css ?> mayuscula' id='per_persona_txt_nombre' value='<?php Gral::_echoTxt($per_persona->getNombre(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nombre')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Cuit-Cuil') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cuil', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cuil', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_cuil">

					<?php $error_input_css = ($error->getErrorXIndice('cuil')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_cuil' type='text' class='textbox <?php echo $error_input_css ?> cuit' id='per_persona_txt_cuil' value='<?php Gral::_echoTxt($per_persona->getCuil(), true) ?>' size='15' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cuil')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Nacimiento') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nacimiento', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nacimiento', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_nacimiento">

					<?php $error_input_css = ($error->getErrorXIndice('nacimiento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_nacimiento' type='text' class='textbox <?php echo $error_input_css ?> date' id='per_persona_txt_nacimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($per_persona->getNacimiento()), true) ?>' size='10' />
					<input type='button' id='cal_per_persona_txt_nacimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'per_persona_txt_nacimiento', ifFormat: '%d/%m/%Y', button: 'cal_per_persona_txt_nacimiento'
						});
					</script>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nacimiento')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GralSexo') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_gral_sexo_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_gral_sexo_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_gral_sexo_id">

					<?php $error_input_css = ($error->getErrorXIndice('gral_sexo_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_gral_sexo_id', Gral::getCmbFiltro(GralSexo::getGralSexosCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getGralSexoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GRAL_SEXO')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_gral_sexo_id" clase_id="gral_sexo" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_gral_sexo_id" <?php echo ($per_persona->getGralSexoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_gral_sexo_id" clase_id="gral_sexo" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_gral_sexo_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('gral_sexo_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='200' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GeoPais') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_pais_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='350' class='adm_carga_datos_datos' id="dato_per_persona_cmb_geo_pais_id">

				  <?php $error_input_css = ($error->getErrorXIndice('geo_pais_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  <?php
					$cmb_geo_pais_id = Gral::getVars(1, 'cmb_geo_pais_id', 0);
					if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_pais_id = $per_persona->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getId();			
					$c = new Criterio(GeoPais::SES_CRITERIOS);
					$c->add('x', $x, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_pais');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'per_persona_cmb_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c, true), Lang::_lang('Seleccione ...', true)), $cmb_geo_pais_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="per_persona_x" elemento_id="cmb_geo_pais_id"')?>
					
         <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_PAIS')){ ?>
		 <img class="img_btn_editar" elemento_id="per_persona_cmb_geo_pais_id" clase_id="geo_pais" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_pais_id" <?php echo ($cmb_geo_pais_id == '') ? "style='display:none;'" : '' ?> />
		 
         <img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_geo_pais_id" clase_id="geo_pais" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_geo_pais_id"></div>
		 <?php } ?>
		 
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_pais_id')->getMensaje()) ?></div>
				  </td>
				</tr>
		
				<tr>
				  <td width='200' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GeoProvincia') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_provincia_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='350' class='adm_carga_datos_datos' id="dato_per_persona_cmb_geo_provincia_id">

				  <?php $error_input_css = ($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  <?php
					$cmb_geo_provincia_id = Gral::getVars(1, 'cmb_geo_provincia_id', 0);
					if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_provincia_id = $per_persona->getGeoLocalidad()->getGeoProvincia()->getId();			
					$c = new Criterio(GeoProvincia::SES_CRITERIOS);
					$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_provincia');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'per_persona_cmb_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c, true), Lang::_lang('Seleccione ...', true)), $cmb_geo_provincia_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="per_persona_cmb_geo_pais_id" elemento_id="cmb_geo_provincia_id"')?>
					
         <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_PROVINCIA')){ ?>
		 <img class="img_btn_editar" elemento_id="per_persona_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_provincia_id" <?php echo ($cmb_geo_provincia_id == '') ? "style='display:none;'" : '' ?> />
		 
         <img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_geo_provincia_id" clase_id="geo_provincia" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_geo_provincia_id"></div>
		 <?php } ?>
		 
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_provincia_id')->getMensaje()) ?></div>
				  </td>
				</tr>
		
				<tr>
				  <td width='200' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('GeoLocalidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_geo_localidad_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='350' class='adm_carga_datos_datos' id="dato_per_persona_cmb_geo_localidad_id">

				  <?php $error_input_css = ($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  <?php
					$cmb_geo_localidad_id = Gral::getVars(1, 'cmb_geo_localidad_id', 0);
					if(!Gral::esPost() and $per_persona->getId()) $cmb_geo_localidad_id = $per_persona->getGeoLocalidad()->getId();			
					$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
					$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
					$c->addOrden('descripcion', 'asc');
					$c->addTabla('geo_localidad');
					$c->setCriterios();
					?>
					<?php Html::html_dib_select(1, 'per_persona_cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c, true), Lang::_lang('Seleccione ...', true)), $cmb_geo_localidad_id, 'textbox combo_padre combo_hijo '.$error_input_css, '', 'combo_padre="per_persona_cmb_geo_provincia_id" elemento_id="cmb_geo_localidad_id"')?>
					
         <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_GEO_LOCALIDAD')){ ?>
		 <img class="img_btn_editar" elemento_id="per_persona_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_geo_localidad_id" <?php echo ($cmb_geo_localidad_id == '') ? "style='display:none;'" : '' ?> />
		 
         <img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_geo_localidad_id" clase_id="geo_localidad" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_geo_localidad_id"></div>
		 <?php } ?>
		 
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('geo_localidad_id')->getMensaje()) ?></div>
				  </td>
				</tr>
		
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Codigo Postal') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_postal', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txt_codigo_postal">

					<?php $error_input_css = ($error->getErrorXIndice('codigo_postal')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='per_persona_txt_codigo_postal' type='text' class='textbox <?php echo $error_input_css ?> ' id='per_persona_txt_codigo_postal' value='<?php Gral::_echoTxt($per_persona->getCodigoPostal(), true) ?>' size='10' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_postal')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Nacionalidad') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_nacionalidad', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_nacionalidad', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_nacionalidad">

					<?php $error_input_css = ($error->getErrorXIndice('nacionalidad')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_nacionalidad', Gral::CmbFiltro(GeoPais::getGeoPaissCmb(true, true)), $per_persona->getNacionalidad(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('nacionalidad')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('PerTipoEstado') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_per_tipo_estado_id', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_per_tipo_estado_id', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_cmb_per_tipo_estado_id">

					<?php $error_input_css = ($error->getErrorXIndice('per_tipo_estado_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'per_persona_cmb_per_tipo_estado_id', Gral::getCmbFiltro(PerTipoEstado::getPerTipoEstadosCmb(true, true), Lang::_lang('Seleccione ...', true)), $per_persona->getPerTipoEstadoId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA_CMB_EDIT_PER_TIPO_ESTADO')){ ?>
		<img class="img_btn_editar" elemento_id="per_persona_cmb_per_tipo_estado_id" clase_id="per_tipo_estado" prefijo='per_persona_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_per_tipo_estado_id" <?php echo ($per_persona->getPerTipoEstadoId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="per_persona_cmb_per_tipo_estado_id" clase_id="per_tipo_estado" prefijo='per_persona_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_per_persona_cmb_per_tipo_estado_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('per_tipo_estado_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td width='150' class='adm_carga_datos_titulos'>
				  
				  <?php Lang::_lang('Observaciones') ?>
				  
				  <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                  <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                  <?php } ?>
				  
				  </td>
				  <td width='300' class='adm_carga_datos_datos' id="dato_per_persona_txa_observacion">

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='per_persona_txa_observacion' rows='10' cols='50' id='per_persona_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($per_persona->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($per_persona->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_per_persona_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='per_persona'/>
		  <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>
		  
		  <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

		  <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />
			  
	
          <input name='btn_guardarnvo' type='button' class='btn_guardarnvo' value="<?php Lang::_lang('Guardar y Agregar Nuevo') ?>" />
		  <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
        </tr>
      </table>
	  
	  
</form>
</body>
</html>
<script>
setInit();
</script>

