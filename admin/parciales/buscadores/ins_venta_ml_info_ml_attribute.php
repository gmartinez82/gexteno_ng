<?php
include_once "_autoload.php";
$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
$criterio->addTabla('ins_venta_ml_info_ml_attribute');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_venta_ml_info_ml_attribute'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsVentaMlInfo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id', Gral::getCmbFiltro(InsVentaMlInfo::getInsVentaMlInfosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id');
			if(trim($buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador) == '') $buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlAttribute') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_attribute_id');
			if(trim($buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador) == '') $buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlValue') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_id', Gral::getCmbFiltro(MlValue::getMlValuesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id'), 'textbox')?>
        	<?php 
			$buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_id');
			if(trim($buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador) == '') $buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('ML Value Valor') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_attribute_ml_value_valor' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_attribute_ml_value_valor' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_valor')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.ml_value_valor');
			if(trim($buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador) == '') $buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_venta_ml_info_ml_attribute_observacion' type='text' class='textbox' id='buscador_ins_venta_ml_info_ml_attribute_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_venta_ml_info_ml_attribute.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_venta_ml_info_ml_attribute_observacion_comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info_ml_attribute.observacion');
			if(trim($buscador_ins_venta_ml_info_ml_attribute_observacion_comparador) == '') $buscador_ins_venta_ml_info_ml_attribute_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_venta_ml_info_ml_attribute_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_venta_ml_info_ml_attribute_observacion_comparador, 'textbox comparador') ?>
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

