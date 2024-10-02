<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajaMovimientoItem::SES_CRITERIOS);
$criterio->addTabla('fnd_caja_movimiento_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_caja_movimiento_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_item_descripcion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_item_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.descripcion');
			if(trim($buscador_fnd_caja_movimiento_item_descripcion_comparador) == '') $buscador_fnd_caja_movimiento_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id', Gral::getCmbFiltro(FndCajaMovimiento::getFndCajaMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.fnd_caja_movimiento_id');
			if(trim($buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id_comparador) == '') $buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_fnd_caja_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_item_importe' type='text' class='textbox' id='buscador_fnd_caja_movimiento_item_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.importe')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_item_importe_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.importe');
			if(trim($buscador_fnd_caja_movimiento_item_importe_comparador) == '') $buscador_fnd_caja_movimiento_item_importe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_importe_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.gral_fp_forma_pago_id');
			if(trim($buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id_comparador) == '') $buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_item_codigo' type='text' class='textbox' id='buscador_fnd_caja_movimiento_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_item_codigo_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.codigo');
			if(trim($buscador_fnd_caja_movimiento_item_codigo_comparador) == '') $buscador_fnd_caja_movimiento_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_item_observacion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_item_observacion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.observacion');
			if(trim($buscador_fnd_caja_movimiento_item_observacion_comparador) == '') $buscador_fnd_caja_movimiento_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_item.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_item_estado_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_item.estado');
			if(trim($buscador_fnd_caja_movimiento_item_estado_comparador) == '') $buscador_fnd_caja_movimiento_item_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_item_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_item_estado_comparador, 'textbox comparador') ?>
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

