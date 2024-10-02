<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
$criterio->addTabla('pde_cotizacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_cotizacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_descripcion' type='text' class='textbox' id='buscador_pde_cotizacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.descripcion');
			if(trim($buscador_pde_cotizacion_descripcion_comparador) == '') $buscador_pde_cotizacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_codigo' type='text' class='textbox' id='buscador_pde_cotizacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_codigo_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.codigo');
			if(trim($buscador_pde_cotizacion_codigo_comparador) == '') $buscador_pde_cotizacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_cotizacion_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_cotizacion_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.pde_pedido_id');
			if(trim($buscador_pde_cotizacion_pde_pedido_id_comparador) == '') $buscador_pde_cotizacion_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_cotizacion_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_cotizacion_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.prv_proveedor_id');
			if(trim($buscador_pde_cotizacion_prv_proveedor_id_comparador) == '') $buscador_pde_cotizacion_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_cotizacion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_cotizacion_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.ins_insumo_id');
			if(trim($buscador_pde_cotizacion_ins_insumo_id_comparador) == '') $buscador_pde_cotizacion_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_cantidad' type='text' class='textbox' id='buscador_pde_cotizacion_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_cantidad_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.cantidad');
			if(trim($buscador_pde_cotizacion_cantidad_comparador) == '') $buscador_pde_cotizacion_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_fecha_entrega' type='text' class='textbox' id='buscador_pde_cotizacion_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_cotizacion.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_cotizacion_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_cotizacion_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_cotizacion_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_pde_cotizacion_fecha_entrega_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.fecha_entrega');
			if(trim($buscador_pde_cotizacion_fecha_entrega_comparador) == '') $buscador_pde_cotizacion_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_cotizacion_observacion' type='text' class='textbox' id='buscador_pde_cotizacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_cotizacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_cotizacion_observacion_comparador = $criterio->getComparadorDeCampo('pde_cotizacion.observacion');
			if(trim($buscador_pde_cotizacion_observacion_comparador) == '') $buscador_pde_cotizacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_cotizacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_cotizacion_observacion_comparador, 'textbox comparador') ?>
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

