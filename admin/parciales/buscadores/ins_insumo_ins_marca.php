<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoInsMarca::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_ins_marca');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_ins_marca'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_marca.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_marca_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_marca.ins_insumo_id');
			if(trim($buscador_ins_insumo_ins_marca_ins_insumo_id_comparador) == '') $buscador_ins_insumo_ins_marca_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_marca_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_marca.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_marca_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_marca.ins_marca_id');
			if(trim($buscador_ins_insumo_ins_marca_ins_marca_id_comparador) == '') $buscador_ins_insumo_ins_marca_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_marca_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_ins_marca_codigo' type='text' class='textbox' id='buscador_ins_insumo_ins_marca_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_marca.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_ins_marca_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_marca.codigo');
			if(trim($buscador_ins_insumo_ins_marca_codigo_comparador) == '') $buscador_ins_insumo_ins_marca_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_marca_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_marca_codigo_comparador, 'textbox comparador') ?>
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

