<?php
include_once "_autoload.php";
$criterio = new Criterio(GenPrcaProceso::SES_CRITERIOS);
$criterio->addTabla('gen_prca_proceso');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_prca_proceso'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_proceso_descripcion' type='text' class='textbox' id='buscador_gen_prca_proceso_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_proceso.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_proceso_descripcion_comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.descripcion');
			if(trim($buscador_gen_prca_proceso_descripcion_comparador) == '') $buscador_gen_prca_proceso_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_proceso_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_proceso_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_proceso_codigo' type='text' class='textbox' id='buscador_gen_prca_proceso_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_proceso.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_proceso_codigo_comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.codigo');
			if(trim($buscador_gen_prca_proceso_codigo_comparador) == '') $buscador_gen_prca_proceso_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_proceso_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_proceso_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_prca_proceso_observacion' type='text' class='textbox' id='buscador_gen_prca_proceso_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_proceso.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_prca_proceso_observacion_comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.observacion');
			if(trim($buscador_gen_prca_proceso_observacion_comparador) == '') $buscador_gen_prca_proceso_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_prca_proceso_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_proceso_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_prca_proceso_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_prca_proceso.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_prca_proceso_estado_comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.estado');
			if(trim($buscador_gen_prca_proceso_estado_comparador) == '') $buscador_gen_prca_proceso_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_prca_proceso_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_prca_proceso_estado_comparador, 'textbox comparador') ?>
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

