<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);
$criterio->addTabla('pde_factura_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_factura_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_item_descripcion' type='text' class='textbox' id='buscador_pde_factura_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_item_descripcion_comparador = $criterio->getComparadorDeCampo('pde_factura_item.descripcion');
			if(trim($buscador_pde_factura_item_descripcion_comparador) == '') $buscador_pde_factura_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_item_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_item_pde_factura_id_comparador = $criterio->getComparadorDeCampo('pde_factura_item.pde_factura_id');
			if(trim($buscador_pde_factura_item_pde_factura_id_comparador) == '') $buscador_pde_factura_item_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_item_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_item_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('pde_factura_item.gral_tipo_iva_id');
			if(trim($buscador_pde_factura_item_gral_tipo_iva_id_comparador) == '') $buscador_pde_factura_item_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFacturaConcepto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_factura_item_pde_factura_concepto_id', Gral::getCmbFiltro(PdeFacturaConcepto::getPdeFacturaConceptosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.pde_factura_concepto_id'), 'textbox')?>
        	<?php 
			$buscador_pde_factura_item_pde_factura_concepto_id_comparador = $criterio->getComparadorDeCampo('pde_factura_item.pde_factura_concepto_id');
			if(trim($buscador_pde_factura_item_pde_factura_concepto_id_comparador) == '') $buscador_pde_factura_item_pde_factura_concepto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_pde_factura_concepto_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_pde_factura_concepto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_item_importe_unitario' type='text' class='textbox' id='buscador_pde_factura_item_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_item_importe_unitario_comparador = $criterio->getComparadorDeCampo('pde_factura_item.importe_unitario');
			if(trim($buscador_pde_factura_item_importe_unitario_comparador) == '') $buscador_pde_factura_item_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_item_cantidad' type='text' class='textbox' id='buscador_pde_factura_item_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_item_cantidad_comparador = $criterio->getComparadorDeCampo('pde_factura_item.cantidad');
			if(trim($buscador_pde_factura_item_cantidad_comparador) == '') $buscador_pde_factura_item_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_item_codigo' type='text' class='textbox' id='buscador_pde_factura_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_item_codigo_comparador = $criterio->getComparadorDeCampo('pde_factura_item.codigo');
			if(trim($buscador_pde_factura_item_codigo_comparador) == '') $buscador_pde_factura_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_factura_item_observacion' type='text' class='textbox' id='buscador_pde_factura_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_factura_item_observacion_comparador = $criterio->getComparadorDeCampo('pde_factura_item.observacion');
			if(trim($buscador_pde_factura_item_observacion_comparador) == '') $buscador_pde_factura_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_factura_item_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_factura_item.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_factura_item_estado_comparador = $criterio->getComparadorDeCampo('pde_factura_item.estado');
			if(trim($buscador_pde_factura_item_estado_comparador) == '') $buscador_pde_factura_item_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_factura_item_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_factura_item_estado_comparador, 'textbox comparador') ?>
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

