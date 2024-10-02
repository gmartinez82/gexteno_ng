<?php
include_once "_autoload.php";
$criterio = new Criterio(AfipCitiComprasCbte::SES_CRITERIOS);
$criterio->addTabla('afip_citi_compras_cbte');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='afip_citi_compras_cbte'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_descripcion' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_descripcion_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.descripcion');
			if(trim($buscador_afip_citi_compras_cbte_descripcion_comparador) == '') $buscador_afip_citi_compras_cbte_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_codigo' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.codigo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_codigo_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.codigo');
			if(trim($buscador_afip_citi_compras_cbte_codigo_comparador) == '') $buscador_afip_citi_compras_cbte_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_prc_id');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cabecera_id');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_fecha_comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_fecha_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_fecha_comprobante');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_comprobante');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_punto_venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_punto_venta' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_punto_venta');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_numero_comprobante');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_despacho_importacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_despacho_importacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_despacho_importacion');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_codigo_documento_vendedor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_numero_identificacion_vendedor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_denominacion_vendedor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_vendedor')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_vendedor');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_total_operacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_operacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_operacion');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_total_conceptos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_conceptos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_total_conceptos');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_operaciones_exentas') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_percepciones_iva') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_percepciones_impuestos_nacionales') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_percepciones_ingresos_brutos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_percepciones_impuestos_municipales') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_impuestos_internos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_codigo_moneda') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_moneda')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_moneda');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_tipo_cambio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_cambio')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_tipo_cambio');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_cantidad_alicuotas_iva') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_codigo_operacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_operacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_codigo_operacion');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_cf_computable') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_cf_computable')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_cf_computable');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_otros_tributos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_otros_tributos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_otros_tributos');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_cuit_emisor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_cuit_emisor')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_cuit_emisor');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_denominacion_emisor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_emisor')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_denominacion_emisor');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_iva_comision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.afip_citi_importe_iva_comision')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.afip_citi_importe_iva_comision');
			if(trim($buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador) == '') $buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_compras_cbte_pde_factura_id_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_factura_id');
			if(trim($buscador_afip_citi_compras_cbte_pde_factura_id_comparador) == '') $buscador_afip_citi_compras_cbte_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_nota_credito_id', Gral::getCmbFiltro(PdeNotaCredito::getPdeNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_nota_credito_id');
			if(trim($buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador) == '') $buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_nota_debito_id', Gral::getCmbFiltro(PdeNotaDebito::getPdeNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.pde_nota_debito_id');
			if(trim($buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador) == '') $buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_compras_cbte_observacion' type='text' class='textbox' id='buscador_afip_citi_compras_cbte_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_compras_cbte.observacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_compras_cbte_observacion_comparador = $criterio->getComparadorDeCampo('afip_citi_compras_cbte.observacion');
			if(trim($buscador_afip_citi_compras_cbte_observacion_comparador) == '') $buscador_afip_citi_compras_cbte_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_compras_cbte_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_compras_cbte_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		     
  <div class='botones'>
    <input name='btn_buscar' type='submit' id='btn_buscar' value='&nbsp;&nbsp;&nbsp; <?php Lang::_lang('Buscar') ?>' />    
    <input name='btn_limpiar' type='submit' id='btn_limpiar' value='<?php Lang::_lang('Limpiar') ?>' />
  </div>

</form>
</div>
<script>
try{
	setInit();
	setInitAdm();
}catch(e){}
</script>

