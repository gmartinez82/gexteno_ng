<?php
include_once "_autoload.php";
$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addTabla('pdi_pedido');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pdi_pedido'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_descripcion' type='text' class='textbox' id='buscador_pdi_pedido_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_descripcion_comparador = $criterio->getComparadorDeCampo('pdi_pedido.descripcion');
			if(trim($buscador_pdi_pedido_descripcion_comparador) == '') $buscador_pdi_pedido_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido.ins_insumo_id');
			if(trim($buscador_pdi_pedido_ins_insumo_id_comparador) == '') $buscador_pdi_pedido_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiTipoOrigen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_tipo_origen_id', Gral::getCmbFiltro(PdiTipoOrigen::getPdiTipoOrigensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.pdi_tipo_origen_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_pdi_tipo_origen_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_tipo_origen_id');
			if(trim($buscador_pdi_pedido_pdi_tipo_origen_id_comparador) == '') $buscador_pdi_pedido_pdi_tipo_origen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_tipo_origen_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_pdi_tipo_origen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiUrgencia') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_urgencia_id', Gral::getCmbFiltro(PdiUrgencia::getPdiUrgenciasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.pdi_urgencia_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_pdi_urgencia_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_urgencia_id');
			if(trim($buscador_pdi_pedido_pdi_urgencia_id_comparador) == '') $buscador_pdi_pedido_pdi_urgencia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_urgencia_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_pdi_urgencia_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanolOrigen') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pdi_pedido_pan_panol_origen', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.pan_panol_origen'), 'textbox') ?>
		
        	<?php 
			$buscador_pdi_pedido_pan_panol_origen_comparador = $criterio->getComparadorDeCampo('pdi_pedido.pan_panol_origen');
			if(trim($buscador_pdi_pedido_pan_panol_origen_comparador) == '') $buscador_pdi_pedido_pan_panol_origen_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_pan_panol_origen_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_pan_panol_origen_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanPanolDestino') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pdi_pedido_pan_panol_destino', Gral::getCmbFiltro(PanPanol::getPanPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.pan_panol_destino'), 'textbox') ?>
		
        	<?php 
			$buscador_pdi_pedido_pan_panol_destino_comparador = $criterio->getComparadorDeCampo('pdi_pedido.pan_panol_destino');
			if(trim($buscador_pdi_pedido_pan_panol_destino_comparador) == '') $buscador_pdi_pedido_pan_panol_destino_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_pan_panol_destino_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_pan_panol_destino_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_codigo' type='text' class='textbox' id='buscador_pdi_pedido_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_codigo_comparador = $criterio->getComparadorDeCampo('pdi_pedido.codigo');
			if(trim($buscador_pdi_pedido_codigo_comparador) == '') $buscador_pdi_pedido_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_tipo_estado_id', Gral::getCmbFiltro(PdiTipoEstado::getPdiTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.pdi_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_pedido_pdi_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pdi_pedido.pdi_tipo_estado_id');
			if(trim($buscador_pdi_pedido_pdi_tipo_estado_id_comparador) == '') $buscador_pdi_pedido_pdi_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_pdi_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_pdi_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_nota_publica' type='text' class='textbox' id='buscador_pdi_pedido_nota_publica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.nota_publica')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_nota_publica_comparador = $criterio->getComparadorDeCampo('pdi_pedido.nota_publica');
			if(trim($buscador_pdi_pedido_nota_publica_comparador) == '') $buscador_pdi_pedido_nota_publica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_nota_publica_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_nota_publica_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_nota_interna' type='text' class='textbox' id='buscador_pdi_pedido_nota_interna' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.nota_interna')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_nota_interna_comparador = $criterio->getComparadorDeCampo('pdi_pedido.nota_interna');
			if(trim($buscador_pdi_pedido_nota_interna_comparador) == '') $buscador_pdi_pedido_nota_interna_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_nota_interna_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_nota_interna_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_pedido_observacion' type='text' class='textbox' id='buscador_pdi_pedido_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_pedido.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_pedido_observacion_comparador = $criterio->getComparadorDeCampo('pdi_pedido.observacion');
			if(trim($buscador_pdi_pedido_observacion_comparador) == '') $buscador_pdi_pedido_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_pedido_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_pedido_observacion_comparador, 'textbox comparador') ?>
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

