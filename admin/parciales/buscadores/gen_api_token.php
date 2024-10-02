<?php
include_once "_autoload.php";
$criterio = new Criterio(GenApiToken::SES_CRITERIOS);
$criterio->addTabla('gen_api_token');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_api_token'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_token_descripcion' type='text' class='textbox' id='buscador_gen_api_token_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_token_descripcion_comparador = $criterio->getComparadorDeCampo('gen_api_token.descripcion');
			if(trim($buscador_gen_api_token_descripcion_comparador) == '') $buscador_gen_api_token_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiConsumer') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_api_token_gen_api_consumer_id', Gral::getCmbFiltro(GenApiConsumer::getGenApiConsumersCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.gen_api_consumer_id'), 'textbox')?>
        	<?php 
			$buscador_gen_api_token_gen_api_consumer_id_comparador = $criterio->getComparadorDeCampo('gen_api_token.gen_api_consumer_id');
			if(trim($buscador_gen_api_token_gen_api_consumer_id_comparador) == '') $buscador_gen_api_token_gen_api_consumer_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_gen_api_consumer_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_gen_api_consumer_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenApiProyecto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_api_token_gen_api_proyecto_id', Gral::getCmbFiltro(GenApiProyecto::getGenApiProyectosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.gen_api_proyecto_id'), 'textbox')?>
        	<?php 
			$buscador_gen_api_token_gen_api_proyecto_id_comparador = $criterio->getComparadorDeCampo('gen_api_token.gen_api_proyecto_id');
			if(trim($buscador_gen_api_token_gen_api_proyecto_id_comparador) == '') $buscador_gen_api_token_gen_api_proyecto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_gen_api_proyecto_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_gen_api_proyecto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_token_vencimiento' type='text' class='textbox' id='buscador_gen_api_token_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.vencimiento')) ?>' size='15' />
					<input type='button' id='cal_buscador_gen_api_token_vencimiento' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gen_api_token_vencimiento', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_gen_api_token_vencimiento'
						});
					</script>
		
        	<?php 
			$buscador_gen_api_token_vencimiento_comparador = $criterio->getComparadorDeCampo('gen_api_token.vencimiento');
			if(trim($buscador_gen_api_token_vencimiento_comparador) == '') $buscador_gen_api_token_vencimiento_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_token_codigo' type='text' class='textbox' id='buscador_gen_api_token_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_token_codigo_comparador = $criterio->getComparadorDeCampo('gen_api_token.codigo');
			if(trim($buscador_gen_api_token_codigo_comparador) == '') $buscador_gen_api_token_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_api_token_observacion' type='text' class='textbox' id='buscador_gen_api_token_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_api_token.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_api_token_observacion_comparador = $criterio->getComparadorDeCampo('gen_api_token.observacion');
			if(trim($buscador_gen_api_token_observacion_comparador) == '') $buscador_gen_api_token_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_api_token_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_api_token_observacion_comparador, 'textbox comparador') ?>
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

