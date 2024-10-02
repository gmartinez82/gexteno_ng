<?php
include_once "_autoload.php";
$criterio = new Criterio(InsNivelAprovisionamiento::SES_CRITERIOS);
$criterio->addTabla('ins_nivel_aprovisionamiento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_nivel_aprovisionamiento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_nivel_aprovisionamiento_descripcion' type='text' class='textbox' id='buscador_ins_nivel_aprovisionamiento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_nivel_aprovisionamiento_descripcion_comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.descripcion');
			if(trim($buscador_ins_nivel_aprovisionamiento_descripcion_comparador) == '') $buscador_ins_nivel_aprovisionamiento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_nivel_aprovisionamiento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_nivel_aprovisionamiento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_nivel_aprovisionamiento_codigo' type='text' class='textbox' id='buscador_ins_nivel_aprovisionamiento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_nivel_aprovisionamiento_codigo_comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.codigo');
			if(trim($buscador_ins_nivel_aprovisionamiento_codigo_comparador) == '') $buscador_ins_nivel_aprovisionamiento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_nivel_aprovisionamiento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_nivel_aprovisionamiento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_nivel_aprovisionamiento_observacion' type='text' class='textbox' id='buscador_ins_nivel_aprovisionamiento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_nivel_aprovisionamiento_observacion_comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.observacion');
			if(trim($buscador_ins_nivel_aprovisionamiento_observacion_comparador) == '') $buscador_ins_nivel_aprovisionamiento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_nivel_aprovisionamiento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_nivel_aprovisionamiento_observacion_comparador, 'textbox comparador') ?>
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

