<?php
include_once "_autoload.php";
$criterio = new Criterio(InsTipoConsumo::SES_CRITERIOS);
$criterio->addTabla('ins_tipo_consumo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_tipo_consumo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_consumo_descripcion' type='text' class='textbox' id='buscador_ins_tipo_consumo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_consumo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_consumo_descripcion_comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.descripcion');
			if(trim($buscador_ins_tipo_consumo_descripcion_comparador) == '') $buscador_ins_tipo_consumo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_consumo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_consumo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_consumo_codigo' type='text' class='textbox' id='buscador_ins_tipo_consumo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_consumo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_consumo_codigo_comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.codigo');
			if(trim($buscador_ins_tipo_consumo_codigo_comparador) == '') $buscador_ins_tipo_consumo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_consumo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_consumo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_consumo_observacion' type='text' class='textbox' id='buscador_ins_tipo_consumo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_consumo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_consumo_observacion_comparador = $criterio->getComparadorDeCampo('ins_tipo_consumo.observacion');
			if(trim($buscador_ins_tipo_consumo_observacion_comparador) == '') $buscador_ins_tipo_consumo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_consumo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_consumo_observacion_comparador, 'textbox comparador') ?>
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

