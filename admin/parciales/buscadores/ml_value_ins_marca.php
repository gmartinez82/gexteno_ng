<?php
include_once "_autoload.php";
$criterio = new Criterio(MlValueInsMarca::SES_CRITERIOS);
$criterio->addTabla('ml_value_ins_marca');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_value_ins_marca'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlValue') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_value_ins_marca_ml_value_id', Gral::getCmbFiltro(MlValue::getMlValuesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_value_ins_marca.ml_value_id'), 'textbox')?>
        	<?php 
			$buscador_ml_value_ins_marca_ml_value_id_comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.ml_value_id');
			if(trim($buscador_ml_value_ins_marca_ml_value_id_comparador) == '') $buscador_ml_value_ins_marca_ml_value_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_value_ins_marca_ml_value_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_value_ins_marca_ml_value_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_value_ins_marca_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_value_ins_marca.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ml_value_ins_marca_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.ins_marca_id');
			if(trim($buscador_ml_value_ins_marca_ins_marca_id_comparador) == '') $buscador_ml_value_ins_marca_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_value_ins_marca_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_value_ins_marca_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_value_ins_marca_observacion' type='text' class='textbox' id='buscador_ml_value_ins_marca_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_value_ins_marca.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_value_ins_marca_observacion_comparador = $criterio->getComparadorDeCampo('ml_value_ins_marca.observacion');
			if(trim($buscador_ml_value_ins_marca_observacion_comparador) == '') $buscador_ml_value_ins_marca_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_value_ins_marca_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_value_ins_marca_observacion_comparador, 'textbox comparador') ?>
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

