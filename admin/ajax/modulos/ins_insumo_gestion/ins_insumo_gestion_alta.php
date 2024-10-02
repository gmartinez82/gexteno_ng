<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo';
$db_nombre_pagina = 'ins_insumo_alta';

$ins_insumo = new InsInsumo();
$error = new DbError();
$hdn_error = 1;

if(Gral::esPost()){
	$hdn_id = Gral::getVars(1, 'hdn_id');

	$btn_guardar = Gral::getVars(1, 'btn_guardar');
	$btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

	$accion = '';
	if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }
	if(trim($btn_guardarnvo) != ''){ $accion = 'guardarnvo'; }
	
	$ins_insumo = new InsInsumo();
	if(trim($hdn_id) != '') $ins_insumo->setId($hdn_id, false);
	$ins_insumo->setInsMarcaId(Gral::getVars(1, "ins_insumo_cmb_ins_marca_id", null));
	$ins_insumo->setInsMatrizId(Gral::getVars(1, "ins_insumo_cmb_ins_matriz_id", null));
	$ins_insumo->setDescripcion(Gral::getVars(1, "ins_insumo_txt_descripcion"));
	$ins_insumo->setCodigoMarca(Gral::getVars(1, "ins_insumo_txt_codigo_marca"));
	$ins_insumo->setCodigoInterno(Gral::getVars(1, "ins_insumo_txt_codigo_interno"));
	$ins_insumo->setCodigoBarra(Gral::getVars(1, "ins_insumo_txt_codigo_barra"));
	$ins_insumo->setCodigoBarraInterno(Gral::getVars(1, "ins_insumo_txt_codigo_barra_interno"));
	$ins_insumo->setEsComprable(Gral::getVars(1, "ins_insumo_cmb_es_comprable", 0));
	$ins_insumo->setEsConsumible(Gral::getVars(1, "ins_insumo_cmb_es_consumible", 0));
	$ins_insumo->setEsTransformableOrigen(Gral::getVars(1, "ins_insumo_cmb_es_transformable_origen", 0));
	$ins_insumo->setEsTransformableDestino(Gral::getVars(1, "ins_insumo_cmb_es_transformable_destino", 0));
	$ins_insumo->setInsUnidadMedidaPedidoId(Gral::getVars(1, "ins_insumo_cmb_ins_unidad_medida_pedido_id", null));
	$ins_insumo->setRetornable(Gral::getVars(1, "ins_insumo_cmb_retornable", 0));
	$ins_insumo->setIdentificable(Gral::getVars(1, "ins_insumo_cmb_identificable", 0));
	$ins_insumo->setPuntoMinimo(Gral::getVars(1, "ins_insumo_txt_punto_minimo", 0));
	$ins_insumo->setPuntoPedido(Gral::getVars(1, "ins_insumo_txt_punto_pedido", 0));
	$ins_insumo->setPuntoMaximo(Gral::getVars(1, "ins_insumo_txt_punto_maximo", 0));
	$ins_insumo->setCantidadMaximaPedido(Gral::getVars(1, "ins_insumo_txt_cantidad_maxima_pedido", 0));
	$ins_insumo->setObservacion(Gral::getVars(1, "ins_insumo_txa_observacion"));
	$ins_insumo->setOrden(Gral::getVars(1, "ins_insumo_txt_orden", 0));
	$ins_insumo->setEstado(Gral::getVars(1, "ins_insumo__estado", 0));
	$ins_insumo->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_txt_creado")));
	$ins_insumo->setCreadoPor(Gral::getVars(1, "ins_insumo__creado_por", null));
	$ins_insumo->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_txt_modificado")));
	$ins_insumo->setModificadoPor(Gral::getVars(1, "ins_insumo__modificado_por", null));

	$ins_insumo_estado = new InsInsumo();
	if(trim($hdn_id) != ''){
		$ins_insumo_estado->setId($hdn_id);
		$ins_insumo->setEstado($ins_insumo_estado->getEstado());
				
	}else{
		$ins_insumo->setEstado(1);
				
	}
	
	switch($accion){
		case 'guardar':
			$error = $ins_insumo->control();
			if(!$error->getExisteError()){
				$ins_insumo->saveDesdeBackend();				
								
				$hdn_error = 0;
				//header('Location: ins_insumo_alta.php?cs=1&id='.$ins_insumo->getId());
			}
		break;
		case 'guardarnvo':
			$error = $ins_insumo->control();
			if(!$error->getExisteError()){
				$ins_insumo->saveDesdeBackend();

				//$hdn_error = 0; // aqui no debe ir para que no cierre el modal
				//header('Location: ins_insumo_alta.php?cs=1');
				$ins_insumo = new InsInsumo();
			}
		break;
	}
	Gral::setSes('InsInsumo_ULTIMO_INSERTADO', $ins_insumo->getId());
}else{
	$prefijo = Gral::getVars(2, 'prefijo');
	$cmb_ins_insumo_id = Gral::getVars(2, $prefijo.'cmb_ins_insumo_id', 0);
	if($cmb_ins_insumo_id != 0){
		$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
	}else{
	
	$ins_insumo->setInsMarcaId(Gral::getVars(2, "ins_marca_id", 'null'));
	$ins_insumo->setInsMatrizId(Gral::getVars(2, "ins_matriz_id", 'null'));
	$ins_insumo->setDescripcion(Gral::getVars(2, "descripcion", ''));
	$ins_insumo->setCodigoMarca(Gral::getVars(2, "codigo_marca", ''));
	$ins_insumo->setCodigoInterno(Gral::getVars(2, "codigo_interno", ''));
	$ins_insumo->setCodigoBarra(Gral::getVars(2, "codigo_barra", ''));
	$ins_insumo->setCodigoBarraInterno(Gral::getVars(2, "codigo_barra_interno", ''));
	$ins_insumo->setEsComprable(Gral::getVars(2, "es_comprable", 0));
	$ins_insumo->setEsConsumible(Gral::getVars(2, "es_consumible", 0));
	$ins_insumo->setEsTransformableOrigen(Gral::getVars(2, "es_transformable_origen", 0));
	$ins_insumo->setEsTransformableDestino(Gral::getVars(2, "es_transformable_destino", 0));
	$ins_insumo->setInsUnidadMedidaPedidoId(Gral::getVars(2, "ins_unidad_medida_pedido_id", 'null'));
	$ins_insumo->setRetornable(Gral::getVars(2, "retornable", 0));
	$ins_insumo->setIdentificable(Gral::getVars(2, "identificable", 0));
	$ins_insumo->setPuntoMinimo(Gral::getVars(2, "punto_minimo", 0));
	$ins_insumo->setPuntoPedido(Gral::getVars(2, "punto_pedido", 0));
	$ins_insumo->setPuntoMaximo(Gral::getVars(2, "punto_maximo", 0));
	$ins_insumo->setCantidadMaximaPedido(Gral::getVars(2, "cantidad_maxima_pedido", 0));
	$ins_insumo->setObservacion(Gral::getVars(2, "observacion", ''));
	$ins_insumo->setOrden(Gral::getVars(2, "orden", 0));
	$ins_insumo->setEstado(Gral::getVars(2, "estado", 0));
	$ins_insumo->setCreado(Gral::getVars(2, "creado", date('Y-m-d H:m:s')));
	$ins_insumo->setCreadoPor(Gral::getVars(2, "creado_por", 0));
	$ins_insumo->setModificado(Gral::getVars(2, "modificado", date('Y-m-d H:m:s')));
	$ins_insumo->setModificadoPor(Gral::getVars(2, "modificado_por", 0));
	}
}

if(!$error->getExisteError()){ 
	$hdn_id = Gral::getVars(2, 'id');
	if(trim($hdn_id) != '') $ins_insumo->setId($hdn_id);
}

?>
<body>
<form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo/ins_insumo_alta.php' >
      <?php //include 'parciales/confirmacion.php';?>
	  <?php //include 'parciales/error.php';?>
      
	  <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo'>
        
				<tr>
				  <td  id="label_ins_insumo_cmb_ins_marca_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_marca_id' ?>" >
				  
                                        <?php Lang::_lang('InsMarca') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_marca_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_ins_marca_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_marca_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), Lang::_lang('Seleccione InsMarca', true)), $ins_insumo->getInsMarcaId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_MARCA')){ ?>
		<img class="img_btn_editar" elemento_id="ins_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_marca_id" <?php echo ($ins_insumo->getInsMarcaId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_cmb_ins_marca_id" clase_id="ins_marca" prefijo='ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_ins_insumo_cmb_ins_marca_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_marca_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_ins_matriz_id" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_ins_matriz_id' ?>" >
				  
                                        <?php Lang::_lang('InsMatriz') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_ins_matriz_id', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_ins_matriz_id', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_ins_matriz_id" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('ins_matriz_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_ins_matriz_id', Gral::getCmbFiltro(InsMatriz::getInsMatrizsCmb(), Lang::_lang('Seleccione InsMatriz', true)), $ins_insumo->getInsMatrizId(), 'textbox '.$error_input_css)?>
		
        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_CMB_EDIT_INS_MATRIZ')){ ?>
		<img class="img_btn_editar" elemento_id="ins_insumo_cmb_ins_matriz_id" clase_id="ins_matriz" prefijo='ins_insumo_' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_cmb_ins_matriz_id" <?php echo ($ins_insumo->getInsMatrizId() == 'null') ? "style='display:none;'" : '' ?> />
		 
		<img class="img_btn_agregar_nuevo" elemento_id="ins_insumo_cmb_ins_matriz_id" clase_id="ins_matriz" prefijo='ins_insumo_' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
		 <div class="div_modal_ins_insumo_cmb_ins_matriz_id"></div>
		<?php } ?> 
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_matriz_id')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_descripcion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_descripcion' ?>" >
				  
                                        <?php Lang::_lang('Descripcion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_descripcion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_descripcion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('descripcion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_descripcion' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_descripcion' value='<?php Gral::_echoTxt($ins_insumo->getDescripcion(), true) ?>' size='50' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('descripcion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_codigo_marca" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_marca' ?>" >
				  
                                        <?php Lang::_lang('Codigo Marca') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_marca', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_marca', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_codigo_marca" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_marca')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_codigo_marca' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_codigo_marca' value='<?php Gral::_echoTxt($ins_insumo->getCodigoMarca(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_marca')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_codigo_interno" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_interno' ?>" >
				  
                                        <?php Lang::_lang('Codigo Interno') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_interno', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_interno', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_codigo_interno" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_interno')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_codigo_interno' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_codigo_interno' value='<?php Gral::_echoTxt($ins_insumo->getCodigoInterno(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_interno')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_codigo_barra" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_codigo_barra' ?>" >
				  
                                        <?php Lang::_lang('Codigo Barra') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_codigo_barra', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_codigo_barra', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_codigo_barra" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('codigo_barra')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_codigo_barra' type='text' class='textbox <?php echo $error_input_css ?> ' id='ins_insumo_txt_codigo_barra' value='<?php Gral::_echoTxt($ins_insumo->getCodigoBarra(), true) ?>' size='40' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('codigo_barra')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_es_comprable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_comprable' ?>" >
				  
                                        <?php Lang::_lang('Es Comprable') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_comprable', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_comprable', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_es_comprable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_comprable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_es_comprable', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsComprable(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_comprable')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_es_consumible" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_consumible' ?>" >
				  
                                        <?php Lang::_lang('Es Consumible') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_consumible', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_consumible', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_es_consumible" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_consumible')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_es_consumible', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsConsumible(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_consumible')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_es_transformable_origen" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_transformable_origen' ?>" >
				  
                                        <?php Lang::_lang('Es Transformable') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_transformable_origen', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_transformable_origen', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_es_transformable_origen" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_transformable_origen')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_es_transformable_origen', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsTransformableOrigen(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_transformable_origen')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_es_transformable_destino" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_es_transformable_destino' ?>" >
				  
                                        <?php Lang::_lang('Es Destino Transformacion') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_es_transformable_destino', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_es_transformable_destino', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_es_transformable_destino" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('es_transformable_destino')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_es_transformable_destino', GralSiNo::getGralSiNosCmb(), $ins_insumo->getEsTransformableDestino(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('es_transformable_destino')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_retornable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_retornable' ?>" >
				  
                                        <?php Lang::_lang('Retornable') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_retornable', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_retornable', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_retornable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('retornable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_retornable', GralSiNo::getGralSiNosCmb(), $ins_insumo->getRetornable(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('retornable')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_cmb_identificable" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_identificable' ?>" >
				  
                                        <?php Lang::_lang('Identificable') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_identificable', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_identificable', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_cmb_identificable" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('identificable')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
		<?php Html::html_dib_select(1, 'ins_insumo_cmb_identificable', GralSiNo::getGralSiNosCmb(), $ins_insumo->getIdentificable(), 'textbox '.$error_input_css) ?>
		
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('identificable')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_punto_minimo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_minimo' ?>" >
				  
                                        <?php Lang::_lang('Punto de Minimo Default') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_minimo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_minimo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_punto_minimo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_minimo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_punto_minimo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_txt_punto_minimo' value='<?php Gral::_echoTxt($ins_insumo->getPuntoMinimo(), true) ?>' size='5' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_minimo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_punto_pedido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_pedido' ?>" >
				  
                                        <?php Lang::_lang('Punto de Pedido Default') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_pedido', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_pedido', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_punto_pedido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_pedido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_punto_pedido' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_txt_punto_pedido' value='<?php Gral::_echoTxt($ins_insumo->getPuntoPedido(), true) ?>' size='5' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_pedido')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_punto_maximo" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_punto_maximo' ?>" >
				  
                                        <?php Lang::_lang('Punto de Maximo Default') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_punto_maximo', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_punto_maximo', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_punto_maximo" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('punto_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_punto_maximo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_txt_punto_maximo' value='<?php Gral::_echoTxt($ins_insumo->getPuntoMaximo(), true) ?>' size='5' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_maximo')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txt_cantidad_maxima_pedido" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_cantidad_maxima_pedido' ?>" >
				  
                                        <?php Lang::_lang('Cant Max Pedido') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_cantidad_maxima_pedido', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_cantidad_maxima_pedido', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txt_cantidad_maxima_pedido" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('cantidad_maxima_pedido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
				  <input name='ins_insumo_txt_cantidad_maxima_pedido' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_txt_cantidad_maxima_pedido' value='<?php Gral::_echoTxt($ins_insumo->getCantidadMaximaPedido(), true) ?>' size='5' />
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('cantidad_maxima_pedido')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
				<tr>
				  <td  id="label_ins_insumo_txa_observacion" class='adm_carga_datos_titulos' width='200' help="<?php echo 'help_'.$db_nombre_pagina.'_observacion' ?>" >
				  
                                        <?php Lang::_lang('Observaciones') ?>

                                        <?php if(Lang::_lang('help_'.$db_nombre_pagina.'_observacion', true, false) != ''){ ?>
                                        <img class="help" src="imgs/icn_help.png" width="15" alt="help" title="<?php Lang::_lang('help_'.$db_nombre_pagina.'_observacion', false, false) ?>" />
                                        <?php } ?>
				  
				  </td>
				  <td  id="dato_ins_insumo_txa_observacion" class='adm_carga_datos_datos' width='400'>

					<?php $error_input_css = ($error->getErrorXIndice('observacion')->getMensaje()) ? 'error-mensaje-input' : ''; ?>
				  
			<textarea name='ins_insumo_txa_observacion' rows='10' cols='50' id='ins_insumo_txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echoTxt($ins_insumo->getObservacion(), true) ?></textarea>
                  <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('observacion')->getMensaje()) ?></div>

				  </td>
				  </tr>
				
      </table>
      <table border='0' align='center'>
        <tr>
          <td width='550' class='adm_carga_datos_botones'>
		  <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($ins_insumo->getId(), true) ?>'/>
		  <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
		  <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_id'/>
		  <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo'/>
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

