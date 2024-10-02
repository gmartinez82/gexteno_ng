<?php
include_once "_autoload.php";
$criterio = new Criterio(AppMovModulo::SES_CRITERIOS);
$criterio->addTabla('app_mov_modulo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='app_mov_modulo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_modulo_descripcion' type='text' class='textbox' id='buscador_app_mov_modulo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_modulo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_modulo_descripcion_comparador = $criterio->getComparadorDeCampo('app_mov_modulo.descripcion');
			if(trim($buscador_app_mov_modulo_descripcion_comparador) == '') $buscador_app_mov_modulo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_modulo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_modulo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_modulo_codigo' type='text' class='textbox' id='buscador_app_mov_modulo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_modulo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_modulo_codigo_comparador = $criterio->getComparadorDeCampo('app_mov_modulo.codigo');
			if(trim($buscador_app_mov_modulo_codigo_comparador) == '') $buscador_app_mov_modulo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_modulo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_modulo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_app_mov_modulo_observacion' type='text' class='textbox' id='buscador_app_mov_modulo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('app_mov_modulo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_app_mov_modulo_observacion_comparador = $criterio->getComparadorDeCampo('app_mov_modulo.observacion');
			if(trim($buscador_app_mov_modulo_observacion_comparador) == '') $buscador_app_mov_modulo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_app_mov_modulo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_app_mov_modulo_observacion_comparador, 'textbox comparador') ?>
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

