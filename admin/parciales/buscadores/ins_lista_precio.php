<?php
include_once "_autoload.php";
$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);
$criterio->addTabla('ins_lista_precio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_lista_precio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_lista_precio_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_lista_precio_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.ins_insumo_id');
			if(trim($buscador_ins_lista_precio_ins_insumo_id_comparador) == '') $buscador_ins_lista_precio_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_lista_precio_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.ins_tipo_lista_precio_id');
			if(trim($buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador) == '') $buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_lista_precio_importe_calculado' type='text' class='textbox' id='buscador_ins_lista_precio_importe_calculado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.importe_calculado')) ?>' size='22' />
        	<?php 
			$buscador_ins_lista_precio_importe_calculado_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_calculado');
			if(trim($buscador_ins_lista_precio_importe_calculado_comparador) == '') $buscador_ins_lista_precio_importe_calculado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_importe_calculado_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_importe_calculado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Imp Manual') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_lista_precio_importe_manual' type='text' class='textbox' id='buscador_ins_lista_precio_importe_manual' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.importe_manual')) ?>' size='22' />
        	<?php 
			$buscador_ins_lista_precio_importe_manual_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_manual');
			if(trim($buscador_ins_lista_precio_importe_manual_comparador) == '') $buscador_ins_lista_precio_importe_manual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_importe_manual_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_importe_manual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_lista_precio_importe_venta' type='text' class='textbox' id='buscador_ins_lista_precio_importe_venta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.importe_venta')) ?>' size='22' />
        	<?php 
			$buscador_ins_lista_precio_importe_venta_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.importe_venta');
			if(trim($buscador_ins_lista_precio_importe_venta_comparador) == '') $buscador_ins_lista_precio_importe_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_importe_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_importe_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Increm') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_lista_precio_porcentaje_incremento' type='text' class='textbox' id='buscador_ins_lista_precio_porcentaje_incremento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_lista_precio.porcentaje_incremento')) ?>' size='22' />
        	<?php 
			$buscador_ins_lista_precio_porcentaje_incremento_comparador = $criterio->getComparadorDeCampo('ins_lista_precio.porcentaje_incremento');
			if(trim($buscador_ins_lista_precio_porcentaje_incremento_comparador) == '') $buscador_ins_lista_precio_porcentaje_incremento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_lista_precio_porcentaje_incremento_comparador', Criterio::getComparadoresCmb(), $buscador_ins_lista_precio_porcentaje_incremento_comparador, 'textbox comparador') ?>
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

