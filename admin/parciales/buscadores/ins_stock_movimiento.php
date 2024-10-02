<?php
include_once "_autoload.php";
$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
$criterio->addTabla('ins_stock_movimiento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_stock_movimiento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_descripcion' type='text' class='textbox' id='buscador_ins_stock_movimiento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_descripcion_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.descripcion');
			if(trim($buscador_ins_stock_movimiento_descripcion_comparador) == '') $buscador_ins_stock_movimiento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockTipoMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id', Gral::getCmbFiltro(InsStockTipoMovimiento::getInsStockTipoMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_stock_tipo_movimiento_id');
			if(trim($buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador) == '') $buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_insumo_id');
			if(trim($buscador_ins_stock_movimiento_ins_insumo_id_comparador) == '') $buscador_ins_stock_movimiento_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.pdi_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_pdi_pedido_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pdi_pedido_id');
			if(trim($buscador_ins_stock_movimiento_pdi_pedido_id_comparador) == '') $buscador_ins_stock_movimiento_pdi_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pdi_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_pdi_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.pan_panol_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_pan_panol_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pan_panol_id');
			if(trim($buscador_ins_stock_movimiento_pan_panol_id_comparador) == '') $buscador_ins_stock_movimiento_pan_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pan_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_pan_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_codigo' type='text' class='textbox' id='buscador_ins_stock_movimiento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_codigo_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.codigo');
			if(trim($buscador_ins_stock_movimiento_codigo_comparador) == '') $buscador_ins_stock_movimiento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_cantidad' type='text' class='textbox' id='buscador_ins_stock_movimiento_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_cantidad_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad');
			if(trim($buscador_ins_stock_movimiento_cantidad_comparador) == '') $buscador_ins_stock_movimiento_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Real') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_cantidad_real' type='text' class='textbox' id='buscador_ins_stock_movimiento_cantidad_real' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_real')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_cantidad_real_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_real');
			if(trim($buscador_ins_stock_movimiento_cantidad_real_comparador) == '') $buscador_ins_stock_movimiento_cantidad_real_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_cantidad_real_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_cantidad_real_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad Comprometida') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_cantidad_comprometida' type='text' class='textbox' id='buscador_ins_stock_movimiento_cantidad_comprometida' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_comprometida')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_cantidad_comprometida_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_comprometida');
			if(trim($buscador_ins_stock_movimiento_cantidad_comprometida_comparador) == '') $buscador_ins_stock_movimiento_cantidad_comprometida_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_cantidad_comprometida_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_cantidad_comprometida_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cant Pasivo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_cantidad_pasivo' type='text' class='textbox' id='buscador_ins_stock_movimiento_cantidad_pasivo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.cantidad_pasivo')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_cantidad_pasivo_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.cantidad_pasivo');
			if(trim($buscador_ins_stock_movimiento_cantidad_pasivo_comparador) == '') $buscador_ins_stock_movimiento_cantidad_pasivo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_cantidad_pasivo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_cantidad_pasivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Hora') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_fechahora' type='text' class='textbox' id='buscador_ins_stock_movimiento_fechahora' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.fechahora')) ?>' size='15' />
					<input type='button' id='cal_buscador_ins_stock_movimiento_fechahora' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_ins_stock_movimiento_fechahora', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_ins_stock_movimiento_fechahora'
						});
					</script>
		
        	<?php 
			$buscador_ins_stock_movimiento_fechahora_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.fechahora');
			if(trim($buscador_ins_stock_movimiento_fechahora_comparador) == '') $buscador_ins_stock_movimiento_fechahora_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_fechahora_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_fechahora_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRemito') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_vta_remito_id', Gral::getCmbFiltro(VtaRemito::getVtaRemitosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.vta_remito_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_vta_remito_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.vta_remito_id');
			if(trim($buscador_ins_stock_movimiento_vta_remito_id_comparador) == '') $buscador_ins_stock_movimiento_vta_remito_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_vta_remito_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_vta_remito_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pde_recepcion_id', Gral::getCmbFiltro(PdeRecepcion::getPdeRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.pde_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_pde_recepcion_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.pde_recepcion_id');
			if(trim($buscador_ins_stock_movimiento_pde_recepcion_id_comparador) == '') $buscador_ins_stock_movimiento_pde_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_pde_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_pde_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsStockTransformacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_stock_transformacion_id', Gral::getCmbFiltro(InsStockTransformacion::getInsStockTransformacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.ins_stock_transformacion_id'), 'textbox')?>
        	<?php 
			$buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.ins_stock_transformacion_id');
			if(trim($buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador) == '') $buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_stock_movimiento_observacion' type='text' class='textbox' id='buscador_ins_stock_movimiento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_stock_movimiento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_stock_movimiento_observacion_comparador = $criterio->getComparadorDeCampo('ins_stock_movimiento.observacion');
			if(trim($buscador_ins_stock_movimiento_observacion_comparador) == '') $buscador_ins_stock_movimiento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_stock_movimiento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_stock_movimiento_observacion_comparador, 'textbox comparador') ?>
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

