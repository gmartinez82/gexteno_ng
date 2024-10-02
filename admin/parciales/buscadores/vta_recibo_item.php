<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_descripcion' type='text' class='textbox' id='buscador_vta_recibo_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.descripcion');
			if(trim($buscador_vta_recibo_item_descripcion_comparador) == '') $buscador_vta_recibo_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.vta_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_vta_recibo_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.vta_recibo_id');
			if(trim($buscador_vta_recibo_item_vta_recibo_id_comparador) == '') $buscador_vta_recibo_item_vta_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_vta_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_vta_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.gral_fp_forma_pago_id');
			if(trim($buscador_vta_recibo_item_gral_fp_forma_pago_id_comparador) == '') $buscador_vta_recibo_item_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_gral_tipo_iva_id', Gral::getCmbFiltro(GralTipoIva::getGralTipoIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.gral_tipo_iva_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_gral_tipo_iva_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.gral_tipo_iva_id');
			if(trim($buscador_vta_recibo_item_gral_tipo_iva_id_comparador) == '') $buscador_vta_recibo_item_gral_tipo_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_gral_tipo_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_gral_tipo_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboConcepto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_vta_recibo_concepto_id', Gral::getCmbFiltro(VtaReciboConcepto::getVtaReciboConceptosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.vta_recibo_concepto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_item_vta_recibo_concepto_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.vta_recibo_concepto_id');
			if(trim($buscador_vta_recibo_item_vta_recibo_concepto_id_comparador) == '') $buscador_vta_recibo_item_vta_recibo_concepto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_vta_recibo_concepto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_vta_recibo_concepto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_importe_unitario' type='text' class='textbox' id='buscador_vta_recibo_item_importe_unitario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.importe_unitario')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_importe_unitario_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.importe_unitario');
			if(trim($buscador_vta_recibo_item_importe_unitario_comparador) == '') $buscador_vta_recibo_item_importe_unitario_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_importe_unitario_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_importe_unitario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_cantidad' type='text' class='textbox' id='buscador_vta_recibo_item_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_cantidad_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.cantidad');
			if(trim($buscador_vta_recibo_item_cantidad_comparador) == '') $buscador_vta_recibo_item_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Conciliado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.conciliado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_item_conciliado_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.conciliado');
			if(trim($buscador_vta_recibo_item_conciliado_comparador) == '') $buscador_vta_recibo_item_conciliado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_conciliado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_conciliado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_codigo' type='text' class='textbox' id='buscador_vta_recibo_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.codigo');
			if(trim($buscador_vta_recibo_item_codigo_comparador) == '') $buscador_vta_recibo_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_item_observacion' type='text' class='textbox' id='buscador_vta_recibo_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_item_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.observacion');
			if(trim($buscador_vta_recibo_item_observacion_comparador) == '') $buscador_vta_recibo_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_item_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_item.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_item_estado_comparador = $criterio->getComparadorDeCampo('vta_recibo_item.estado');
			if(trim($buscador_vta_recibo_item_estado_comparador) == '') $buscador_vta_recibo_item_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_item_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_item_estado_comparador, 'textbox comparador') ?>
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

