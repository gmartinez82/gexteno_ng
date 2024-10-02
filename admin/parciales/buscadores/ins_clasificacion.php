<?php
include_once "_autoload.php";
$criterio = new Criterio(InsClasificacion::SES_CRITERIOS);
$criterio->addTabla('ins_clasificacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_clasificacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_clasificacion_descripcion' type='text' class='textbox' id='buscador_ins_clasificacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_clasificacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_clasificacion_descripcion_comparador = $criterio->getComparadorDeCampo('ins_clasificacion.descripcion');
			if(trim($buscador_ins_clasificacion_descripcion_comparador) == '') $buscador_ins_clasificacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_clasificacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_clasificacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_clasificacion_codigo' type='text' class='textbox' id='buscador_ins_clasificacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_clasificacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_clasificacion_codigo_comparador = $criterio->getComparadorDeCampo('ins_clasificacion.codigo');
			if(trim($buscador_ins_clasificacion_codigo_comparador) == '') $buscador_ins_clasificacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_clasificacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_clasificacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_clasificacion_observacion' type='text' class='textbox' id='buscador_ins_clasificacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_clasificacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_clasificacion_observacion_comparador = $criterio->getComparadorDeCampo('ins_clasificacion.observacion');
			if(trim($buscador_ins_clasificacion_observacion_comparador) == '') $buscador_ins_clasificacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_clasificacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_clasificacion_observacion_comparador, 'textbox comparador') ?>
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

