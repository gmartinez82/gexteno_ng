<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(!UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA')){
    echo "No tiene asignada la credencial INS_TIPO_LISTA_PRECIO_ALTA. ";
    return false;
}

$db_nombre_objeto = 'ins_tipo_lista_precio';
$db_nombre_pagina = 'ins_tipo_lista_precio_alta';

$ins_tipo_lista_precio = new InsTipoListaPrecio();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_tipo_lista_precio = new InsTipoListaPrecio();
	if(trim($hdn_id) != '') $ins_tipo_lista_precio->setId($hdn_id, false);
	$ins_tipo_lista_precio->setDescripcion(Gral::getVars(1, "ins_tipo_lista_precio_txt_descripcion"));
	$ins_tipo_lista_precio->setDescripcionCorta(Gral::getVars(1, "ins_tipo_lista_precio_txt_descripcion_corta"));
	$ins_tipo_lista_precio->setCodigo(Gral::getVars(1, "ins_tipo_lista_precio_txt_codigo"));
	$ins_tipo_lista_precio->setPorcentajeIncremento(Gral::getVars(1, "ins_tipo_lista_precio_txt_porcentaje_incremento", 0));
	$ins_tipo_lista_precio->setImporteMinimo(Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "ins_tipo_lista_precio_txt_importe_minimo", 0)));
	$ins_tipo_lista_precio->setIncluyeLogistica(Gral::getVars(1, "ins_tipo_lista_precio_cmb_incluye_logistica", 0));
	$ins_tipo_lista_precio->setBultoCerrado(Gral::getVars(1, "ins_tipo_lista_precio_cmb_bulto_cerrado", 0));
	$ins_tipo_lista_precio->setPorcentajeComision(Gral::getVars(1, "ins_tipo_lista_precio_txt_porcentaje_comision", 0));
	$ins_tipo_lista_precio->setPorcentajeLogistica(Gral::getVars(1, "ins_tipo_lista_precio_txt_porcentaje_logistica", 0));
	$ins_tipo_lista_precio->setPorcentajeDescuentoMaximo(Gral::getVars(1, "ins_tipo_lista_precio_txt_porcentaje_descuento_maximo", 0));
	$ins_tipo_lista_precio->setPorDefault(Gral::getVars(1, "ins_tipo_lista_precio_cmb_por_default", 0));
	$ins_tipo_lista_precio->setObservacion(Gral::getVars(1, "ins_tipo_lista_precio_txa_observacion"));
	$ins_tipo_lista_precio->setOrden(Gral::getVars(1, "ins_tipo_lista_precio_txt_orden", 0));
	$ins_tipo_lista_precio->setEstado(Gral::getVars(1, "ins_tipo_lista_precio__estado", 0));
	$ins_tipo_lista_precio->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_lista_precio_txt_creado")));
	$ins_tipo_lista_precio->setCreadoPor(Gral::getVars(1, "ins_tipo_lista_precio__creado_por", null));
	$ins_tipo_lista_precio->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_tipo_lista_precio_txt_modificado")));
	$ins_tipo_lista_precio->setModificadoPor(Gral::getVars(1, "ins_tipo_lista_precio__modificado_por", null));

	$ins_tipo_lista_precio_estado = new InsTipoListaPrecio();
	if(trim($hdn_id) != ''){
		$ins_tipo_lista_precio_estado->setId($hdn_id);
		$ins_tipo_lista_precio->setEstado($ins_tipo_lista_precio_estado->getEstado());
				
	}else{
		$ins_tipo_lista_precio->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$ins_tipo_lista_precio->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_tipo_lista_precio_alta.php?cs=1&id='.$ins_tipo_lista_precio->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_tipo_lista_precio->control();
			if(!$error->getExisteError()){
				$ins_tipo_lista_precio->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_tipo_lista_precio_alta.php?cs=1');
				$ins_tipo_lista_precio = new InsTipoListaPrecio();
			}
		break;
	}
	Gral::setSes('InsTipoListaPrecio_ULTIMO_INSERTADO', $ins_tipo_lista_precio->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_tipo_lista_precio_id = Gral::getVars(2, $prefijo.'cmb_ins_tipo_lista_precio_id', 0);
	if($cmb_ins_tipo_lista_precio_id != 0){
		$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($cmb_ins_tipo_lista_precio_id);
	}else{
	
	$ins_tipo_lista_precio->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_tipo_lista_precio->setDescripcionCorta(Gral::getVars(2, "descripcion_corta", ''));
	$ins_tipo_lista_precio->setCodigo(Gral::getVars(2, "codigo", ''));
	$ins_tipo_lista_precio->setPorcentajeIncremento(Gral::getVars(2, "porcentaje_incremento", 0));
	$ins_tipo_lista_precio->setImporteMinimo(Gral::getVars(2, "importe_minimo", 0));
	$ins_tipo_lista_precio->setIncluyeLogistica(Gral::getVars(2, "incluye_logistica", 0));
	$ins_tipo_lista_precio->setBultoCerrado(Gral::getVars(2, "bulto_cerrado", 0));
	$ins_tipo_lista_precio->setPorcentajeComision(Gral::getVars(2, "porcentaje_comision", 0));
	$ins_tipo_lista_precio->setPorcentajeLogistica(Gral::getVars(2, "porcentaje_logistica", 0));
	$ins_tipo_lista_precio->setPorcentajeDescuentoMaximo(Gral::getVars(2, "porcentaje_descuento_maximo", 0));
	$ins_tipo_lista_precio->setPorDefault(Gral::getVars(2, "por_default", 0));
	$ins_tipo_lista_precio->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_tipo_lista_precio->setOrden(Gral::getVars(2, "orden", 0));
	$ins_tipo_lista_precio->setEstado(Gral::getVars(2, "estado", 0));
	$ins_tipo_lista_precio->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_tipo_lista_precio->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_tipo_lista_precio->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_tipo_lista_precio->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_tipo_lista_precio->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_tipo_lista_precio/ins_tipo_lista_precio_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
            <?php //include 'parciales/error.php';?>
        
            <div class="alta full datos">
                <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_tipo_lista_precio' width='90%'>
        
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_lista_precio_txt_descripcion' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getDescripcion(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_descripcion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_descripcion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_descripcion_corta" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion_corta' ?>" >
				  
                                        <?php Lang::_lang('Descripcion Corta', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_descripcion_corta" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion_corta')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_descripcion_corta' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_lista_precio_txt_descripcion_corta' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getDescripcionCorta(), true) ?>' size='50' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_descripcion_corta', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_descripcion_corta', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion_corta')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_codigo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo' ?>" >
				  
                                        <?php Lang::_lang('Codigo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_codigo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_codigo' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_tipo_lista_precio_txt_codigo' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getCodigo(), true) ?>' size='40' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_codigo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_codigo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_porcentaje_incremento" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_incremento' ?>" >
				  
                                        <?php Lang::_lang('Porc Incremento', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_porcentaje_incremento" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_incremento')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_porcentaje_incremento' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_tipo_lista_precio_txt_porcentaje_incremento' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getPorcentajeIncremento(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_incremento', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_incremento', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_incremento', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_incremento', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_incremento')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_importe_minimo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_importe_minimo' ?>" >
				  
                                        <?php Lang::_lang('Imp Minimo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_importe_minimo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('importe_minimo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_importe_minimo' type='text' class='textbox <?php echo $error_input_css ?> moneda' id='ins_tipo_lista_precio_txt_importe_minimo' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($ins_tipo_lista_precio->getImporteMinimo()), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_importe_minimo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_importe_minimo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_importe_minimo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_importe_minimo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('importe_minimo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_cmb_incluye_logistica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_incluye_logistica' ?>" >
				  
                                        <?php Lang::_lang('Incl Logistica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_cmb_incluye_logistica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('incluye_logistica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_tipo_lista_precio_cmb_incluye_logistica', GralSiNo::getGralSiNosCmb(), $ins_tipo_lista_precio->getIncluyeLogistica(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_incluye_logistica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_incluye_logistica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_incluye_logistica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_incluye_logistica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('incluye_logistica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_cmb_bulto_cerrado" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_bulto_cerrado' ?>" >
				  
                                        <?php Lang::_lang('Bulto Cerrado', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_cmb_bulto_cerrado" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('bulto_cerrado')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_tipo_lista_precio_cmb_bulto_cerrado', GralSiNo::getGralSiNosCmb(), $ins_tipo_lista_precio->getBultoCerrado(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_bulto_cerrado', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_bulto_cerrado', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_bulto_cerrado', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_bulto_cerrado', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('bulto_cerrado')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_porcentaje_comision" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_comision' ?>" >
				  
                                        <?php Lang::_lang('Porc Comision', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_porcentaje_comision" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_porcentaje_comision' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_tipo_lista_precio_txt_porcentaje_comision' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getPorcentajeComision(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_comision', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_comision', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_comision')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_porcentaje_logistica" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_logistica' ?>" >
				  
                                        <?php Lang::_lang('Porc Logistica', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_porcentaje_logistica" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_logistica')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_porcentaje_logistica' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_tipo_lista_precio_txt_porcentaje_logistica' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getPorcentajeLogistica(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_logistica', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_logistica', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_logistica', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_logistica', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_logistica')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txt_porcentaje_descuento_maximo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_porcentaje_descuento_maximo' ?>" >
				  
                                        <?php Lang::_lang('Porc Desc Maximo', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txt_porcentaje_descuento_maximo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('porcentaje_descuento_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_tipo_lista_precio_txt_porcentaje_descuento_maximo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_tipo_lista_precio_txt_porcentaje_descuento_maximo' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo(), true) ?>' size='5' />            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_descuento_maximo', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_porcentaje_descuento_maximo', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_descuento_maximo', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_porcentaje_descuento_maximo', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('porcentaje_descuento_maximo')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_cmb_por_default" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_por_default' ?>" >
				  
                                        <?php Lang::_lang('Por Default', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_cmb_por_default" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('por_default')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_tipo_lista_precio_cmb_por_default', GralSiNo::getGralSiNosCmb(), $ins_tipo_lista_precio->getPorDefault(), 'textbox '.$error_input_css) ?>
		            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_por_default', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_por_default', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_por_default', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_por_default', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('por_default')->getMensaje()) ?></div>

                </td>
            </tr>
				
				<tr>
				  <td  id="label_ins_tipo_lista_precio_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones', false, true, XmlLenguajeTipo::TIPO_PALABRA) ?>
				  
				  </td>
				  <td  id="dato_ins_tipo_lista_precio_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_tipo_lista_precio_txa_observacion' rows='10' cols='50' id='ins_tipo_lista_precio_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_tipo_lista_precio->getObservacion(), true) ?></textarea>            
                    <?php if(Lang::_lang('help_ins_tipo_lista_precio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_AYUDA) != ''){ ?>
                        <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" width="25" alt="help" title="<?php Lang::_lang('help_ins_tipo_lista_precio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_AYUDA) ?>" />
                    <?php } ?>

                    <?php if(Lang::_lang('comentario_ins_tipo_lista_precio_alta_observacion', true, false, XmlLenguajeTipo::TIPO_COMENTARIO) != ''){ ?>
                        <div class="gen-help-comentario"><?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_observacion', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?></div>
                    <?php } ?>
                
                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

                </td>
            </tr>
				
        </table>
      </div>
      
      <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_tipo_lista_precio->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_tipo_lista_precio_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_tipo_lista_precio'/>
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

