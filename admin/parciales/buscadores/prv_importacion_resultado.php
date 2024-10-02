<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvImportacionResultado::SES_CRITERIOS);
$criterio->addTabla('prv_importacion_resultado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_importacion_resultado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_resultado_descripcion' type='text' class='textbox' id='buscador_prv_importacion_resultado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_resultado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_resultado_descripcion_comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.descripcion');
			if(trim($buscador_prv_importacion_resultado_descripcion_comparador) == '') $buscador_prv_importacion_resultado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_resultado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_resultado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvImportacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_resultado_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_resultado.prv_importacion_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_resultado_prv_importacion_id_comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.prv_importacion_id');
			if(trim($buscador_prv_importacion_resultado_prv_importacion_id_comparador) == '') $buscador_prv_importacion_resultado_prv_importacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_resultado_prv_importacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_resultado_prv_importacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_resultado_codigo' type='text' class='textbox' id='buscador_prv_importacion_resultado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_resultado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_resultado_codigo_comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.codigo');
			if(trim($buscador_prv_importacion_resultado_codigo_comparador) == '') $buscador_prv_importacion_resultado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_resultado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_resultado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_resultado_observacion' type='text' class='textbox' id='buscador_prv_importacion_resultado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_resultado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_resultado_observacion_comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.observacion');
			if(trim($buscador_prv_importacion_resultado_observacion_comparador) == '') $buscador_prv_importacion_resultado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_resultado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_resultado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones Tecnicas') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_resultado_observacion_tecnica' type='text' class='textbox' id='buscador_prv_importacion_resultado_observacion_tecnica' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_resultado.observacion_tecnica')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_resultado_observacion_tecnica_comparador = $criterio->getComparadorDeCampo('prv_importacion_resultado.observacion_tecnica');
			if(trim($buscador_prv_importacion_resultado_observacion_tecnica_comparador) == '') $buscador_prv_importacion_resultado_observacion_tecnica_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_resultado_observacion_tecnica_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_resultado_observacion_tecnica_comparador, 'textbox comparador') ?>
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

