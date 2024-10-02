<?php
include_once "_autoload.php";
$criterio = new Criterio(GenApiConsumer::SES_CRITERIOS);
$criterio->addTabla('gen_api_consumer');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_api_consumer'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_consumer_descripcion' type='text' class='textbox' id='buscador_gen_api_consumer_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_consumer_descripcion_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.descripcion');
			if(trim($buscador_gen_api_consumer_descripcion_comparador) == '') $buscador_gen_api_consumer_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiProyecto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_api_consumer_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.gen_api_proyecto_id'), 'textbox')?>
        	<?php 
			$buscador_gen_api_consumer_gen_api_proyecto_id_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.gen_api_proyecto_id');
			if(trim($buscador_gen_api_consumer_gen_api_proyecto_id_comparador) == '') $buscador_gen_api_consumer_gen_api_proyecto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_gen_api_proyecto_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_gen_api_proyecto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Consumer') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_consumer_consumer' type='text' class='textbox' id='buscador_gen_api_consumer_consumer' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.consumer')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_consumer_consumer_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.consumer');
			if(trim($buscador_gen_api_consumer_consumer_comparador) == '') $buscador_gen_api_consumer_consumer_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_consumer_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_consumer_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Secret Code') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_consumer_secret_code' type='text' class='textbox' id='buscador_gen_api_consumer_secret_code' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.secret_code')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_consumer_secret_code_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.secret_code');
			if(trim($buscador_gen_api_consumer_secret_code_comparador) == '') $buscador_gen_api_consumer_secret_code_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_secret_code_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_secret_code_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_consumer_codigo' type='text' class='textbox' id='buscador_gen_api_consumer_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_consumer_codigo_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.codigo');
			if(trim($buscador_gen_api_consumer_codigo_comparador) == '') $buscador_gen_api_consumer_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_consumer_observacion' type='text' class='textbox' id='buscador_gen_api_consumer_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_consumer.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_consumer_observacion_comparador = $criterio->getComparadorDeCampo('gen_api_consumer.observacion');
			if(trim($buscador_gen_api_consumer_observacion_comparador) == '') $buscador_gen_api_consumer_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_consumer_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_consumer_observacion_comparador, 'textbox comparador') ?>
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

