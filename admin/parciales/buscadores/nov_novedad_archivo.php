<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedadArchivo::SES_CRITERIOS);
$criterio->addTabla('nov_novedad_archivo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad_archivo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_archivo_descripcion' type='text' class='textbox' id='buscador_nov_novedad_archivo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_archivo_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.descripcion');
			if(trim($buscador_nov_novedad_archivo_descripcion_comparador) == '') $buscador_nov_novedad_archivo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NovNovedad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_archivo_nov_novedad_id', Gral::getCmbFiltro(NovNovedad::getNovNovedadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.nov_novedad_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_archivo_nov_novedad_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.nov_novedad_id');
			if(trim($buscador_nov_novedad_archivo_nov_novedad_id_comparador) == '') $buscador_nov_novedad_archivo_nov_novedad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_nov_novedad_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_nov_novedad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_archivo_codigo' type='text' class='textbox' id='buscador_nov_novedad_archivo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_archivo_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.codigo');
			if(trim($buscador_nov_novedad_archivo_codigo_comparador) == '') $buscador_nov_novedad_archivo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_archivo_observacion' type='text' class='textbox' id='buscador_nov_novedad_archivo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_archivo_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.observacion');
			if(trim($buscador_nov_novedad_archivo_observacion_comparador) == '') $buscador_nov_novedad_archivo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_archivo_peso' type='text' class='textbox' id='buscador_nov_novedad_archivo_peso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.peso')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_archivo_peso_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.peso');
			if(trim($buscador_nov_novedad_archivo_peso_comparador) == '') $buscador_nov_novedad_archivo_peso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_peso_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_archivo_tipo' type='text' class='textbox' id='buscador_nov_novedad_archivo_tipo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_archivo.tipo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_archivo_tipo_comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.tipo');
			if(trim($buscador_nov_novedad_archivo_tipo_comparador) == '') $buscador_nov_novedad_archivo_tipo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_archivo_tipo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_archivo_tipo_comparador, 'textbox comparador') ?>
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

