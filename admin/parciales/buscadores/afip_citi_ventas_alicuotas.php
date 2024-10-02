<?php
include_once "_autoload.php";
$criterio = new Criterio(AfipCitiVentasAlicuotas::SES_CRITERIOS);
$criterio->addTabla('afip_citi_ventas_alicuotas');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='afip_citi_ventas_alicuotas'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_descripcion' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_descripcion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.descripcion');
			if(trim($buscador_afip_citi_ventas_alicuotas_descripcion_comparador) == '') $buscador_afip_citi_ventas_alicuotas_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_codigo' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.codigo')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_codigo_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.codigo');
			if(trim($buscador_afip_citi_ventas_alicuotas_codigo_comparador) == '') $buscador_afip_citi_ventas_alicuotas_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id', Gral::getCmbFiltro(AfipCitiPrc::getAfipCitiPrcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_prc_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_prc_id');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_prc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id', Gral::getCmbFiltro(AfipCitiCabecera::getAfipCitiCabecerasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_cabecera_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_cabecera_id');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_cabecera_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_tipo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_tipo_comprobante');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_tipo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_punto_venta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_punto_venta')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_punto_venta');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_punto_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_numero_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_numero_comprobante');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_numero_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_importe_neto_gravado')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_importe_neto_gravado');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_importe_neto_gravado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_alicuota_iva')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_alicuota_iva');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_alicuota_iva_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.afip_citi_importe_impuesto_liquidado')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.afip_citi_importe_impuesto_liquidado');
			if(trim($buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado_comparador) == '') $buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_afip_citi_importe_impuesto_liquidado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_factura_id', Gral::getCmbFiltro(VtaFactura::getVtaFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.vta_factura_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_vta_factura_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.vta_factura_id');
			if(trim($buscador_afip_citi_ventas_alicuotas_vta_factura_id_comparador) == '') $buscador_afip_citi_ventas_alicuotas_vta_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_vta_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.vta_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.vta_nota_credito_id');
			if(trim($buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id_comparador) == '') $buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_vta_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id', Gral::getCmbFiltro(VtaNotaDebito::getVtaNotaDebitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.vta_nota_debito_id'), 'textbox')?>
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.vta_nota_debito_id');
			if(trim($buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id_comparador) == '') $buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_vta_nota_debito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_afip_citi_ventas_alicuotas_observacion' type='text' class='textbox' id='buscador_afip_citi_ventas_alicuotas_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('afip_citi_ventas_alicuotas.observacion')) ?>' size='22' />
        	<?php 
			$buscador_afip_citi_ventas_alicuotas_observacion_comparador = $criterio->getComparadorDeCampo('afip_citi_ventas_alicuotas.observacion');
			if(trim($buscador_afip_citi_ventas_alicuotas_observacion_comparador) == '') $buscador_afip_citi_ventas_alicuotas_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_afip_citi_ventas_alicuotas_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_afip_citi_ventas_alicuotas_observacion_comparador, 'textbox comparador') ?>
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

