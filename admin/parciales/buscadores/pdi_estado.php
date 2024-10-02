<?php
include_once "_autoload.php";
$criterio = new Criterio(PdiEstado::SES_CRITERIOS);
$criterio->addTabla('pdi_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pdi_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_estado_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.pdi_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_estado_pdi_pedido_id_comparador = $criterio->getComparadorDeCampo('pdi_estado.pdi_pedido_id');
			if(trim($buscador_pdi_estado_pdi_pedido_id_comparador) == '') $buscador_pdi_estado_pdi_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_pdi_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_pdi_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_estado_pdi_tipo_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.pdi_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_estado_pdi_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pdi_estado.pdi_tipo_estado_id');
			if(trim($buscador_pdi_estado_pdi_tipo_estado_id_comparador) == '') $buscador_pdi_estado_pdi_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_pdi_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_pdi_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_estado_cantidad' type='text' class='textbox' id='buscador_pdi_estado_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pdi_estado_cantidad_comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad');
			if(trim($buscador_pdi_estado_cantidad_comparador) == '') $buscador_pdi_estado_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Stock Real') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_estado_cantidad_stock_real' type='text' class='textbox' id='buscador_pdi_estado_cantidad_stock_real' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.cantidad_stock_real')) ?>' size='22' />
        	<?php 
			$buscador_pdi_estado_cantidad_stock_real_comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad_stock_real');
			if(trim($buscador_pdi_estado_cantidad_stock_real_comparador) == '') $buscador_pdi_estado_cantidad_stock_real_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_cantidad_stock_real_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_cantidad_stock_real_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Stock Comprometida') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_estado_cantidad_stock_comprometida' type='text' class='textbox' id='buscador_pdi_estado_cantidad_stock_comprometida' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.cantidad_stock_comprometida')) ?>' size='22' />
        	<?php 
			$buscador_pdi_estado_cantidad_stock_comprometida_comparador = $criterio->getComparadorDeCampo('pdi_estado.cantidad_stock_comprometida');
			if(trim($buscador_pdi_estado_cantidad_stock_comprometida_comparador) == '') $buscador_pdi_estado_cantidad_stock_comprometida_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_cantidad_stock_comprometida_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_cantidad_stock_comprometida_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_estado_fechahora' type='text' class='textbox' id='buscador_pdi_estado_fechahora' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.fechahora')) ?>' size='15' />
					<input type='button' id='cal_buscador_pdi_estado_fechahora' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pdi_estado_fechahora', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_pdi_estado_fechahora'
						});
					</script>
		
        	<?php 
			$buscador_pdi_estado_fechahora_comparador = $criterio->getComparadorDeCampo('pdi_estado.fechahora');
			if(trim($buscador_pdi_estado_fechahora_comparador) == '') $buscador_pdi_estado_fechahora_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_fechahora_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_fechahora_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Venta Perdida') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pdi_estado_venta_perdida', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.venta_perdida'), 'textbox') ?>
		
        	<?php 
			$buscador_pdi_estado_venta_perdida_comparador = $criterio->getComparadorDeCampo('pdi_estado.venta_perdida');
			if(trim($buscador_pdi_estado_venta_perdida_comparador) == '') $buscador_pdi_estado_venta_perdida_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_venta_perdida_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_venta_perdida_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_estado_observacion' type='text' class='textbox' id='buscador_pdi_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_estado_observacion_comparador = $criterio->getComparadorDeCampo('pdi_estado.observacion');
			if(trim($buscador_pdi_estado_observacion_comparador) == '') $buscador_pdi_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_estado_observacion_comparador, 'textbox comparador') ?>
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

