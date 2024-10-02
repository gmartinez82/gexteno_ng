<?php
include_once "_autoload.php";
$criterio = new Criterio(PanPanol::SES_CRITERIOS);
$criterio->addTabla('pan_panol');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pan_panol'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_panol_descripcion' type='text' class='textbox' id='buscador_pan_panol_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pan_panol_descripcion_comparador = $criterio->getComparadorDeCampo('pan_panol.descripcion');
			if(trim($buscador_pan_panol_descripcion_comparador) == '') $buscador_pan_panol_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_panol_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PanTipoPanol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pan_panol_pan_tipo_panol_id', Gral::getCmbFiltro(PanTipoPanol::getPanTipoPanolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.pan_tipo_panol_id'), 'textbox')?>
        	<?php 
			$buscador_pan_panol_pan_tipo_panol_id_comparador = $criterio->getComparadorDeCampo('pan_panol.pan_tipo_panol_id');
			if(trim($buscador_pan_panol_pan_tipo_panol_id_comparador) == '') $buscador_pan_panol_pan_tipo_panol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pan_panol_pan_tipo_panol_id_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_pan_tipo_panol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pan_panol_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pan_panol_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pan_panol.pde_centro_pedido_id');
			if(trim($buscador_pan_panol_pde_centro_pedido_id_comparador) == '') $buscador_pan_panol_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pan_panol_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_panol_codigo' type='text' class='textbox' id='buscador_pan_panol_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pan_panol_codigo_comparador = $criterio->getComparadorDeCampo('pan_panol.codigo');
			if(trim($buscador_pan_panol_codigo_comparador) == '') $buscador_pan_panol_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_panol_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Corto') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_panol_codigo_corto' type='text' class='textbox' id='buscador_pan_panol_codigo_corto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.codigo_corto')) ?>' size='22' />
        	<?php 
			$buscador_pan_panol_codigo_corto_comparador = $criterio->getComparadorDeCampo('pan_panol.codigo_corto');
			if(trim($buscador_pan_panol_codigo_corto_comparador) == '') $buscador_pan_panol_codigo_corto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_panol_codigo_corto_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_codigo_corto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pan_panol_observacion' type='text' class='textbox' id='buscador_pan_panol_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pan_panol.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pan_panol_observacion_comparador = $criterio->getComparadorDeCampo('pan_panol.observacion');
			if(trim($buscador_pan_panol_observacion_comparador) == '') $buscador_pan_panol_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pan_panol_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pan_panol_observacion_comparador, 'textbox comparador') ?>
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

