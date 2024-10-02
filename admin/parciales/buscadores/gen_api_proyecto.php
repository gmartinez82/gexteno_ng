<?php
include_once "_autoload.php";
$criterio = new Criterio(GenApiProyecto::SES_CRITERIOS);
$criterio->addTabla('gen_api_proyecto');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_api_proyecto'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_proyecto_descripcion' type='text' class='textbox' id='buscador_gen_api_proyecto_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_proyecto.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_proyecto_descripcion_comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.descripcion');
			if(trim($buscador_gen_api_proyecto_descripcion_comparador) == '') $buscador_gen_api_proyecto_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_proyecto_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_proyecto_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Url Api') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_proyecto_url_api' type='text' class='textbox' id='buscador_gen_api_proyecto_url_api' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_proyecto.url_api')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_proyecto_url_api_comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.url_api');
			if(trim($buscador_gen_api_proyecto_url_api_comparador) == '') $buscador_gen_api_proyecto_url_api_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_proyecto_url_api_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_proyecto_url_api_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_proyecto_codigo' type='text' class='textbox' id='buscador_gen_api_proyecto_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_proyecto.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_proyecto_codigo_comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.codigo');
			if(trim($buscador_gen_api_proyecto_codigo_comparador) == '') $buscador_gen_api_proyecto_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_proyecto_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_proyecto_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_proyecto_observacion' type='text' class='textbox' id='buscador_gen_api_proyecto_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_proyecto.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_proyecto_observacion_comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.observacion');
			if(trim($buscador_gen_api_proyecto_observacion_comparador) == '') $buscador_gen_api_proyecto_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_proyecto_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_proyecto_observacion_comparador, 'textbox comparador') ?>
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

