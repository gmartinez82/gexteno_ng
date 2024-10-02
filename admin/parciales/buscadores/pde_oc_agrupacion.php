<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addTabla('pde_oc_agrupacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_agrupacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_descripcion' type='text' class='textbox' id='buscador_pde_oc_agrupacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.descripcion');
			if(trim($buscador_pde_oc_agrupacion_descripcion_comparador) == '') $buscador_pde_oc_agrupacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_codigo' type='text' class='textbox' id='buscador_pde_oc_agrupacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.codigo');
			if(trim($buscador_pde_oc_agrupacion_codigo_comparador) == '') $buscador_pde_oc_agrupacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcTipoOrigen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id', Gral::getCmbFiltro(PdeOcTipoOrigen::getPdeOcTipoOrigensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_oc_tipo_origen_id');
			if(trim($buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id_comparador) == '') $buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_pde_oc_tipo_origen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.prv_proveedor_id');
			if(trim($buscador_pde_oc_agrupacion_prv_proveedor_id_comparador) == '') $buscador_pde_oc_agrupacion_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_centro_pedido_id');
			if(trim($buscador_pde_oc_agrupacion_pde_centro_pedido_id_comparador) == '') $buscador_pde_oc_agrupacion_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_centro_recepcion_id');
			if(trim($buscador_pde_oc_agrupacion_pde_centro_recepcion_id_comparador) == '') $buscador_pde_oc_agrupacion_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id', Gral::getCmbFiltro(PdeOcAgrupacionTipoEstado::getPdeOcAgrupacionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id');
			if(trim($buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id_comparador) == '') $buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_pde_oc_agrupacion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_prv_descuento_financiero_id', Gral::getCmbFiltro(PrvDescuentoFinanciero::getPrvDescuentoFinancierosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_prv_descuento_financiero_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.prv_descuento_financiero_id');
			if(trim($buscador_pde_oc_agrupacion_prv_descuento_financiero_id_comparador) == '') $buscador_pde_oc_agrupacion_prv_descuento_financiero_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_prv_descuento_financiero_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_prv_descuento_financiero_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_fecha_entrega' type='text' class='textbox' id='buscador_pde_oc_agrupacion_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_oc_agrupacion.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_oc_agrupacion_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_oc_agrupacion_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_oc_agrupacion_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_pde_oc_agrupacion_fecha_entrega_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.fecha_entrega');
			if(trim($buscador_pde_oc_agrupacion_fecha_entrega_comparador) == '') $buscador_pde_oc_agrupacion_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_vencimiento' type='text' class='textbox' id='buscador_pde_oc_agrupacion_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_oc_agrupacion.vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_oc_agrupacion_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_oc_agrupacion_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_oc_agrupacion_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_oc_agrupacion_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.vencimiento');
			if(trim($buscador_pde_oc_agrupacion_vencimiento_comparador) == '') $buscador_pde_oc_agrupacion_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_nota_publica' type='text' class='textbox' id='buscador_pde_oc_agrupacion_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_nota_publica_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.nota_publica');
			if(trim($buscador_pde_oc_agrupacion_nota_publica_comparador) == '') $buscador_pde_oc_agrupacion_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_nota_interna' type='text' class='textbox' id='buscador_pde_oc_agrupacion_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.nota_interna');
			if(trim($buscador_pde_oc_agrupacion_nota_interna_comparador) == '') $buscador_pde_oc_agrupacion_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_observacion' type='text' class='textbox' id='buscador_pde_oc_agrupacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion.observacion');
			if(trim($buscador_pde_oc_agrupacion_observacion_comparador) == '') $buscador_pde_oc_agrupacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_observacion_comparador, 'textbox comparador') ?>
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

