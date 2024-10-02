<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaNotaCreditoItem::SES_CRITERIOS);
$criterio->addTabla('vta_nota_credito_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_nota_credito_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_item_descripcion' type='text' class='textbox' id='buscador_vta_nota_credito_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_item_descripcion_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.descripcion');
			if(trim($buscador_vta_nota_credito_item_descripcion_comparador) == '') $buscador_vta_nota_credito_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_item_vta_nota_credito_id', Gral::getCmbFiltro(VtaNotaCredito::getVtaNotaCreditosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.vta_nota_credito_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_item_vta_nota_credito_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.vta_nota_credito_id');
			if(trim($buscador_vta_nota_credito_item_vta_nota_credito_id_comparador) == '') $buscador_vta_nota_credito_item_vta_nota_credito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_vta_nota_credito_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_vta_nota_credito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_item_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.gral_tipo_iva_id');
			if(trim($buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador) == '') $buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaNotaCreditoConcepto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_item_vta_nota_credito_concepto_id', Gral::getCmbFiltro(VtaNotaCreditoConcepto::getVtaNotaCreditoConceptosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.vta_nota_credito_concepto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.vta_nota_credito_concepto_id');
			if(trim($buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador) == '') $buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_item_importe_unitario' type='text' class='textbox' id='buscador_vta_nota_credito_item_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_item_importe_unitario_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.importe_unitario');
			if(trim($buscador_vta_nota_credito_item_importe_unitario_comparador) == '') $buscador_vta_nota_credito_item_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_item_cantidad' type='text' class='textbox' id='buscador_vta_nota_credito_item_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_item_cantidad_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.cantidad');
			if(trim($buscador_vta_nota_credito_item_cantidad_comparador) == '') $buscador_vta_nota_credito_item_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_item_percepcion_iibb_aplica', Gral::getCmbFiltro(PercepcionIibbApl::getPercepcionIibbAplsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.percepcion_iibb_aplica'), 'textbox')?>
        	<?php 
			$buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.percepcion_iibb_aplica');
			if(trim($buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador) == '') $buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_item_codigo' type='text' class='textbox' id='buscador_vta_nota_credito_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_item_codigo_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.codigo');
			if(trim($buscador_vta_nota_credito_item_codigo_comparador) == '') $buscador_vta_nota_credito_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_nota_credito_item_observacion' type='text' class='textbox' id='buscador_vta_nota_credito_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_nota_credito_item_observacion_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.observacion');
			if(trim($buscador_vta_nota_credito_item_observacion_comparador) == '') $buscador_vta_nota_credito_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_nota_credito_item_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_nota_credito_item.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_nota_credito_item_estado_comparador = $criterio->getComparadorDeCampo('vta_nota_credito_item.estado');
			if(trim($buscador_vta_nota_credito_item_estado_comparador) == '') $buscador_vta_nota_credito_item_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_nota_credito_item_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_nota_credito_item_estado_comparador, 'textbox comparador') ?>
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

