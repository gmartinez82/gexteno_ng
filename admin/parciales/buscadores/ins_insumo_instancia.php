<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoInstancia::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_instancia');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_instancia'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_descripcion' type='text' class='textbox' id='buscador_ins_insumo_instancia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_descripcion_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.descripcion');
			if(trim($buscador_ins_insumo_instancia_descripcion_comparador) == '') $buscador_ins_insumo_instancia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_instancia_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_instancia_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.ins_insumo_id');
			if(trim($buscador_ins_insumo_instancia_ins_insumo_id_comparador) == '') $buscador_ins_insumo_instancia_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vida Util') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_vida_util' type='text' class='textbox' id='buscador_ins_insumo_instancia_vida_util' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.vida_util')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_vida_util_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.vida_util');
			if(trim($buscador_ins_insumo_instancia_vida_util_comparador) == '') $buscador_ins_insumo_instancia_vida_util_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_vida_util_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_vida_util_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Margen') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_margen' type='text' class='textbox' id='buscador_ins_insumo_instancia_margen' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.margen')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_margen_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.margen');
			if(trim($buscador_ins_insumo_instancia_margen_comparador) == '') $buscador_ins_insumo_instancia_margen_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_margen_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_margen_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_codigo' type='text' class='textbox' id='buscador_ins_insumo_instancia_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.codigo');
			if(trim($buscador_ins_insumo_instancia_codigo_comparador) == '') $buscador_ins_insumo_instancia_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_observacion' type='text' class='textbox' id='buscador_ins_insumo_instancia_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.observacion');
			if(trim($buscador_ins_insumo_instancia_observacion_comparador) == '') $buscador_ins_insumo_instancia_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Orden') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_instancia_orden' type='text' class='textbox' id='buscador_ins_insumo_instancia_orden' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_instancia.orden')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_instancia_orden_comparador = $criterio->getComparadorDeCampo('ins_insumo_instancia.orden');
			if(trim($buscador_ins_insumo_instancia_orden_comparador) == '') $buscador_ins_insumo_instancia_orden_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_instancia_orden_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_instancia_orden_comparador, 'textbox comparador') ?>
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

