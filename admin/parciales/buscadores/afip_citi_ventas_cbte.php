<?php
include_once "_autoload.php";
$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
$criterio->addTabla('afip_citi_ventas_cbte');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='afip_citi_ventas_cbte'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_descripcion' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_descripcion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.descripcion');
			if(trim($buscador_afip_citi_ventas_cbte_descripcion_comparador) == '') $buscador_afip_citi_ventas_cbte_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_codigo' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.codigo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_codigo_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.codigo');
			if(trim($buscador_afip_citi_ventas_cbte_codigo_comparador) == '') $buscador_afip_citi_ventas_cbte_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_prc_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_prc_id');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_prc_id_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_prc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_prc_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_prc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_cabecera_id');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_cabecera_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_comprobante');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_fecha_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_comprobante');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Punto Venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_punto_venta' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_punto_venta_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_punto_venta');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_punto_venta_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nro Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nro Comprobante Hasta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_numero_comprobante_hasta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Documento Comprador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_codigo_documento_comprador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nro Identificacion Comprador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_numero_identificacion_comprador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Denominacion Comprador') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_denominacion_comprador')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_denominacion_comprador');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_denominacion_comprador_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Total Operacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_operacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_operacion');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_total_operacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Total Conceptos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_total_conceptos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Percepcion No Categorizados') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepcion_no_categorizados_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Operaciones Exentas') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_operaciones_exentas_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Percepciones Impuestos Nacionales') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Percepciones Ingresos Brutos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Percepciones Impuestos Municipales') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Impuestos Internos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_impuestos_internos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Moneda') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_moneda')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_moneda');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_codigo_moneda_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo Cambio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_cambio')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_tipo_cambio');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_tipo_cambio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Alicuotas Iva') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_cantidad_alicuotas_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Operacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_operacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_codigo_operacion');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_codigo_operacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Otros Tributos') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_importe_otros_tributos_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Vencimiento Pago') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago');
			if(trim($buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago_comparador) == '') $buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_afip_citi_fecha_vencimiento_pago_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_factura_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_cbte_vta_factura_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_factura_id');
			if(trim($buscador_afip_citi_ventas_cbte_vta_factura_id_comparador) == '') $buscador_afip_citi_ventas_cbte_vta_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_vta_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_cbte_vta_nota_credito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_nota_credito_id');
			if(trim($buscador_afip_citi_ventas_cbte_vta_nota_credito_id_comparador) == '') $buscador_afip_citi_ventas_cbte_vta_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_vta_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_cbte_vta_nota_debito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.vta_nota_debito_id');
			if(trim($buscador_afip_citi_ventas_cbte_vta_nota_debito_id_comparador) == '') $buscador_afip_citi_ventas_cbte_vta_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_vta_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_vta_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_cbte_observacion' type='text' class='textbox' id='buscador_afip_citi_ventas_cbte_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_cbte.observacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_cbte_observacion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_cbte.observacion');
			if(trim($buscador_afip_citi_ventas_cbte_observacion_comparador) == '') $buscador_afip_citi_ventas_cbte_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_cbte_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_cbte_observacion_comparador, 'textbox comparador') ?>
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

