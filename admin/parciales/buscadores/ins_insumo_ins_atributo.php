<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoInsAtributo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_ins_atributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_ins_atributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_atributo_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_insumo_id');
			if(trim($buscador_ins_insumo_ins_atributo_ins_insumo_id_comparador) == '') $buscador_ins_insumo_ins_atributo_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_atributo_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsAtributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_atributo_id', Gral::getCmbFiltro(InsAtributo::getInsAtributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_atributo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_atributo_ins_atributo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_atributo_id');
			if(trim($buscador_ins_insumo_ins_atributo_ins_atributo_id_comparador) == '') $buscador_ins_insumo_ins_atributo_ins_atributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_atributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_atributo_ins_atributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Valor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_ins_atributo_valor' type='text' class='textbox' id='buscador_ins_insumo_ins_atributo_valor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_atributo.valor')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_ins_atributo_valor_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.valor');
			if(trim($buscador_ins_insumo_ins_atributo_valor_comparador) == '') $buscador_ins_insumo_ins_atributo_valor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_valor_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_atributo_valor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsUnidadMedidaAtributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id', Gral::getCmbFiltro(InsUnidadMedidaAtributo::getInsUnidadMedidaAtributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_ins_atributo.ins_unidad_medida_atributo_id');
			if(trim($buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id_comparador) == '') $buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_ins_atributo_ins_unidad_medida_atributo_id_comparador, 'textbox comparador') ?>
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

