<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago_pde_factura');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_orden_pago_pde_factura'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_pde_factura_descripcion' type='text' class='textbox' id='buscador_pde_orden_pago_pde_factura_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_pde_factura_descripcion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.descripcion');
			if(trim($buscador_pde_orden_pago_pde_factura_descripcion_comparador) == '') $buscador_pde_orden_pago_pde_factura_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOrdenPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_pde_orden_pago_id', Gral::getCmbFiltro(PdeOrdenPago::getPdeOrdenPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.pde_orden_pago_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.pde_orden_pago_id');
			if(trim($buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador) == '') $buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_pde_factura_id', Gral::getCmbFiltro(PdeFactura::getPdeFacturasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.pde_factura_id'), 'textbox')?>
        	<?php 
			$buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.pde_factura_id');
			if(trim($buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador) == '') $buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_pde_factura_importe_afectado' type='text' class='textbox' id='buscador_pde_orden_pago_pde_factura_importe_afectado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.importe_afectado')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_pde_factura_importe_afectado_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.importe_afectado');
			if(trim($buscador_pde_orden_pago_pde_factura_importe_afectado_comparador) == '') $buscador_pde_orden_pago_pde_factura_importe_afectado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_importe_afectado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_importe_afectado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_pde_factura_codigo' type='text' class='textbox' id='buscador_pde_orden_pago_pde_factura_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_pde_factura_codigo_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.codigo');
			if(trim($buscador_pde_orden_pago_pde_factura_codigo_comparador) == '') $buscador_pde_orden_pago_pde_factura_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_orden_pago_pde_factura_observacion' type='text' class='textbox' id='buscador_pde_orden_pago_pde_factura_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_orden_pago_pde_factura_observacion_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.observacion');
			if(trim($buscador_pde_orden_pago_pde_factura_observacion_comparador) == '') $buscador_pde_orden_pago_pde_factura_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_orden_pago_pde_factura.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_orden_pago_pde_factura_estado_comparador = $criterio->getComparadorDeCampo('pde_orden_pago_pde_factura.estado');
			if(trim($buscador_pde_orden_pago_pde_factura_estado_comparador) == '') $buscador_pde_orden_pago_pde_factura_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_orden_pago_pde_factura_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_orden_pago_pde_factura_estado_comparador, 'textbox comparador') ?>
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

