<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedadImagen::SES_CRITERIOS);
$criterio->addTabla('nov_novedad_imagen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad_imagen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NovNovedad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_imagen_nov_novedad_id', Gral::getCmbFiltro(NovNovedad::getNovNovedadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.nov_novedad_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_imagen_nov_novedad_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.nov_novedad_id');
			if(trim($buscador_nov_novedad_imagen_nov_novedad_id_comparador) == '') $buscador_nov_novedad_imagen_nov_novedad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_nov_novedad_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_nov_novedad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_descripcion' type='text' class='textbox' id='buscador_nov_novedad_imagen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.descripcion');
			if(trim($buscador_nov_novedad_imagen_descripcion_comparador) == '') $buscador_nov_novedad_imagen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_codigo' type='text' class='textbox' id='buscador_nov_novedad_imagen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.codigo');
			if(trim($buscador_nov_novedad_imagen_codigo_comparador) == '') $buscador_nov_novedad_imagen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_observacion' type='text' class='textbox' id='buscador_nov_novedad_imagen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.observacion');
			if(trim($buscador_nov_novedad_imagen_observacion_comparador) == '') $buscador_nov_novedad_imagen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_archivo' type='text' class='textbox' id='buscador_nov_novedad_imagen_archivo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.archivo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_archivo_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.archivo');
			if(trim($buscador_nov_novedad_imagen_archivo_comparador) == '') $buscador_nov_novedad_imagen_archivo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_archivo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_archivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_peso' type='text' class='textbox' id='buscador_nov_novedad_imagen_peso' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.peso')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_peso_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.peso');
			if(trim($buscador_nov_novedad_imagen_peso_comparador) == '') $buscador_nov_novedad_imagen_peso_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_peso_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_peso_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_tipo' type='text' class='textbox' id='buscador_nov_novedad_imagen_tipo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.tipo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_tipo_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.tipo');
			if(trim($buscador_nov_novedad_imagen_tipo_comparador) == '') $buscador_nov_novedad_imagen_tipo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_tipo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_tipo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_alto' type='text' class='textbox' id='buscador_nov_novedad_imagen_alto' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.alto')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_alto_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.alto');
			if(trim($buscador_nov_novedad_imagen_alto_comparador) == '') $buscador_nov_novedad_imagen_alto_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_alto_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_alto_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_imagen_ancho' type='text' class='textbox' id='buscador_nov_novedad_imagen_ancho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_imagen.ancho')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_imagen_ancho_comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.ancho');
			if(trim($buscador_nov_novedad_imagen_ancho_comparador) == '') $buscador_nov_novedad_imagen_ancho_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_imagen_ancho_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_imagen_ancho_comparador, 'textbox comparador') ?>
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

