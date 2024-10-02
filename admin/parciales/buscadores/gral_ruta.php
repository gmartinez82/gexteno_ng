<?php
include_once "_autoload.php";
$criterio = new Criterio(GralRuta::SES_CRITERIOS);
$criterio->addTabla('gral_ruta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_ruta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_descripcion' type='text' class='textbox' id='buscador_gral_ruta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_descripcion_comparador = $criterio->getComparadorDeCampo('gral_ruta.descripcion');
			if(trim($buscador_gral_ruta_descripcion_comparador) == '') $buscador_gral_ruta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_codigo' type='text' class='textbox' id='buscador_gral_ruta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_codigo_comparador = $criterio->getComparadorDeCampo('gral_ruta.codigo');
			if(trim($buscador_gral_ruta_codigo_comparador) == '') $buscador_gral_ruta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_observacion' type='text' class='textbox' id='buscador_gral_ruta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_observacion_comparador = $criterio->getComparadorDeCampo('gral_ruta.observacion');
			if(trim($buscador_gral_ruta_observacion_comparador) == '') $buscador_gral_ruta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_ruta_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_ruta_estado_comparador = $criterio->getComparadorDeCampo('gral_ruta.estado');
			if(trim($buscador_gral_ruta_estado_comparador) == '') $buscador_gral_ruta_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_estado_comparador, 'textbox comparador') ?>
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

