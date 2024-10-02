<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recepcion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_descripcion' type='text' class='textbox' id='buscador_pde_recepcion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recepcion.descripcion');
			if(trim($buscador_pde_recepcion_descripcion_comparador) == '') $buscador_pde_recepcion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_codigo' type='text' class='textbox' id='buscador_pde_recepcion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_codigo_comparador = $criterio->getComparadorDeCampo('pde_recepcion.codigo');
			if(trim($buscador_pde_recepcion_codigo_comparador) == '') $buscador_pde_recepcion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nro Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_nro_comprobante' type='text' class='textbox' id='buscador_pde_recepcion_nro_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.nro_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_nro_comprobante_comparador = $criterio->getComparadorDeCampo('pde_recepcion.nro_comprobante');
			if(trim($buscador_pde_recepcion_nro_comprobante_comparador) == '') $buscador_pde_recepcion_nro_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_nro_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_nro_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id', Gral::getCmbFiltro(PdeTipoRecepcion::getPdeTipoRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_tipo_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_tipo_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_tipo_recepcion_id');
			if(trim($buscador_pde_recepcion_pde_tipo_recepcion_id_comparador) == '') $buscador_pde_recepcion_pde_tipo_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_tipo_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_centro_recepcion_id');
			if(trim($buscador_pde_recepcion_pde_centro_recepcion_id_comparador) == '') $buscador_pde_recepcion_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.prv_proveedor_id');
			if(trim($buscador_pde_recepcion_prv_proveedor_id_comparador) == '') $buscador_pde_recepcion_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_pedido_id');
			if(trim($buscador_pde_recepcion_pde_pedido_id_comparador) == '') $buscador_pde_recepcion_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOc') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_oc_id', Gral::getCmbFiltro(PdeOc::getPdeOcsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_oc_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_oc_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_oc_id');
			if(trim($buscador_pde_recepcion_pde_oc_id_comparador) == '') $buscador_pde_recepcion_pde_oc_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_oc_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_oc_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.ins_insumo_id');
			if(trim($buscador_pde_recepcion_ins_insumo_id_comparador) == '') $buscador_pde_recepcion_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_id', Gral::getCmbFiltro(PdeRecepcionTipoEstado::getPdeRecepcionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_id');
			if(trim($buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador) == '') $buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id', Gral::getCmbFiltro(PdeRecepcionTipoEstadoFacturacion::getPdeRecepcionTipoEstadoFacturacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id');
			if(trim($buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador) == '') $buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_cantidad' type='text' class='textbox' id='buscador_pde_recepcion_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_cantidad_comparador = $criterio->getComparadorDeCampo('pde_recepcion.cantidad');
			if(trim($buscador_pde_recepcion_cantidad_comparador) == '') $buscador_pde_recepcion_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_fecha_entrega' type='text' class='textbox' id='buscador_pde_recepcion_fecha_entrega' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_recepcion.fecha_entrega'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_recepcion_fecha_entrega' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_recepcion_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_recepcion_fecha_entrega'
						});
					</script>
		
        	<?php 
			$buscador_pde_recepcion_fecha_entrega_comparador = $criterio->getComparadorDeCampo('pde_recepcion.fecha_entrega');
			if(trim($buscador_pde_recepcion_fecha_entrega_comparador) == '') $buscador_pde_recepcion_fecha_entrega_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_fecha_entrega_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_fecha_entrega_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_vencimiento' type='text' class='textbox' id='buscador_pde_recepcion_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_recepcion.vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_recepcion_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_recepcion_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_recepcion_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_recepcion_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_recepcion.vencimiento');
			if(trim($buscador_pde_recepcion_vencimiento_comparador) == '') $buscador_pde_recepcion_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeRecepcionAgrupacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_agrupacion_id', Gral::getCmbFiltro(PdeRecepcionAgrupacion::getPdeRecepcionAgrupacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador = $criterio->getComparadorDeCampo('pde_recepcion.pde_recepcion_agrupacion_id');
			if(trim($buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador) == '') $buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_observacion' type='text' class='textbox' id='buscador_pde_recepcion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_observacion_comparador = $criterio->getComparadorDeCampo('pde_recepcion.observacion');
			if(trim($buscador_pde_recepcion_observacion_comparador) == '') $buscador_pde_recepcion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_observacion_comparador, 'textbox comparador') ?>
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

