<?php
include_once "_autoload.php";
$criterio = new Criterio(PdePedido::SES_CRITERIOS);
$criterio->addTabla('pde_pedido');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_pedido'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_descripcion' type='text' class='textbox' id='buscador_pde_pedido_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_descripcion_comparador = $criterio->getComparadorDeCampo('pde_pedido.descripcion');
			if(trim($buscador_pde_pedido_descripcion_comparador) == '') $buscador_pde_pedido_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_centro_pedido_id');
			if(trim($buscador_pde_pedido_pde_centro_pedido_id_comparador) == '') $buscador_pde_pedido_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pde_pedido.ins_insumo_id');
			if(trim($buscador_pde_pedido_ins_insumo_id_comparador) == '') $buscador_pde_pedido_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeUrgencia') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_pde_urgencia_id', Gral::getCmbFiltro(PdeUrgencia::getPdeUrgenciasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.pde_urgencia_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_pde_urgencia_id_comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_urgencia_id');
			if(trim($buscador_pde_pedido_pde_urgencia_id_comparador) == '') $buscador_pde_pedido_pde_urgencia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_pde_urgencia_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_pde_urgencia_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_pde_tipo_estado_id', Gral::getCmbFiltro(PdeTipoEstado::getPdeTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.pde_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_pde_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_pedido.pde_tipo_estado_id');
			if(trim($buscador_pde_pedido_pde_tipo_estado_id_comparador) == '') $buscador_pde_pedido_pde_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_pde_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_pde_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_cantidad' type='text' class='textbox' id='buscador_pde_pedido_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_cantidad_comparador = $criterio->getComparadorDeCampo('pde_pedido.cantidad');
			if(trim($buscador_pde_pedido_cantidad_comparador) == '') $buscador_pde_pedido_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_vencimiento' type='text' class='textbox' id='buscador_pde_pedido_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('pde_pedido.vencimiento'))) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_pedido_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_pedido_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_buscador_pde_pedido_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_pde_pedido_vencimiento_comparador = $criterio->getComparadorDeCampo('pde_pedido.vencimiento');
			if(trim($buscador_pde_pedido_vencimiento_comparador) == '') $buscador_pde_pedido_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_codigo' type='text' class='textbox' id='buscador_pde_pedido_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_codigo_comparador = $criterio->getComparadorDeCampo('pde_pedido.codigo');
			if(trim($buscador_pde_pedido_codigo_comparador) == '') $buscador_pde_pedido_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Coment a Proveedor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_comentario_proveedor' type='text' class='textbox' id='buscador_pde_pedido_comentario_proveedor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.comentario_proveedor')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_comentario_proveedor_comparador = $criterio->getComparadorDeCampo('pde_pedido.comentario_proveedor');
			if(trim($buscador_pde_pedido_comentario_proveedor_comparador) == '') $buscador_pde_pedido_comentario_proveedor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_comentario_proveedor_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_comentario_proveedor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_nota_publica' type='text' class='textbox' id='buscador_pde_pedido_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_nota_publica_comparador = $criterio->getComparadorDeCampo('pde_pedido.nota_publica');
			if(trim($buscador_pde_pedido_nota_publica_comparador) == '') $buscador_pde_pedido_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_nota_interna' type='text' class='textbox' id='buscador_pde_pedido_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_nota_interna_comparador = $criterio->getComparadorDeCampo('pde_pedido.nota_interna');
			if(trim($buscador_pde_pedido_nota_interna_comparador) == '') $buscador_pde_pedido_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_observacion' type='text' class='textbox' id='buscador_pde_pedido_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_observacion_comparador = $criterio->getComparadorDeCampo('pde_pedido.observacion');
			if(trim($buscador_pde_pedido_observacion_comparador) == '') $buscador_pde_pedido_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_observacion_comparador, 'textbox comparador') ?>
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

