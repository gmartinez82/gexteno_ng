<?php
include_once "_autoload.php";
$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
$criterio->addTabla('ml_attribute_ins_atributo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_attribute_ins_atributo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('MlAttribute') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_attribute_ins_atributo_ml_attribute_id', Gral::getCmbFiltro(MlAttribute::getMlAttributesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_ins_atributo.ml_attribute_id'), 'textbox')?>
        	<?php 
			$buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador = $criterio->getComparadorDeCampo('ml_attribute_ins_atributo.ml_attribute_id');
			if(trim($buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador) == '') $buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsAtributo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ml_attribute_ins_atributo_ins_atributo_id', Gral::getCmbFiltro(InsAtributo::getInsAtributosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_ins_atributo.ins_atributo_id'), 'textbox')?>
        	<?php 
			$buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador = $criterio->getComparadorDeCampo('ml_attribute_ins_atributo.ins_atributo_id');
			if(trim($buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador) == '') $buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_attribute_ins_atributo_observacion' type='text' class='textbox' id='buscador_ml_attribute_ins_atributo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_attribute_ins_atributo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_attribute_ins_atributo_observacion_comparador = $criterio->getComparadorDeCampo('ml_attribute_ins_atributo.observacion');
			if(trim($buscador_ml_attribute_ins_atributo_observacion_comparador) == '') $buscador_ml_attribute_ins_atributo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_attribute_ins_atributo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_attribute_ins_atributo_observacion_comparador, 'textbox comparador') ?>
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

