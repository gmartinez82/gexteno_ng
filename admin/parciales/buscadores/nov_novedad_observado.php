<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedadObservado::SES_CRITERIOS);
$criterio->addTabla('nov_novedad_observado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad_observado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NovNovedad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_observado_nov_novedad_id', Gral::getCmbFiltro(NovNovedad::getNovNovedadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_observado.nov_novedad_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_observado_nov_novedad_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.nov_novedad_id');
			if(trim($buscador_nov_novedad_observado_nov_novedad_id_comparador) == '') $buscador_nov_novedad_observado_nov_novedad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observado_nov_novedad_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observado_nov_novedad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_observado_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_observado.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_observado_us_usuario_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.us_usuario_id');
			if(trim($buscador_nov_novedad_observado_us_usuario_id_comparador) == '') $buscador_nov_novedad_observado_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observado_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observado_us_usuario_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_observado_descripcion' type='text' class='textbox' id='buscador_nov_novedad_observado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_observado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_observado_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.descripcion');
			if(trim($buscador_nov_novedad_observado_descripcion_comparador) == '') $buscador_nov_novedad_observado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_observado_codigo' type='text' class='textbox' id='buscador_nov_novedad_observado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_observado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_observado_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.codigo');
			if(trim($buscador_nov_novedad_observado_codigo_comparador) == '') $buscador_nov_novedad_observado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_observado_observacion' type='text' class='textbox' id='buscador_nov_novedad_observado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_observado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_observado_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad_observado.observacion');
			if(trim($buscador_nov_novedad_observado_observacion_comparador) == '') $buscador_nov_novedad_observado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observado_observacion_comparador, 'textbox comparador') ?>
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

