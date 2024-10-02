<?php
include_once "_autoload.php";
$criterio = new Criterio(NotVideo::SES_CRITERIOS);
$criterio->addTabla('not_video');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='not_video'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_video_descripcion' type='text' class='textbox' id='buscador_not_video_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_video.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_not_video_descripcion_comparador = $criterio->getComparadorDeCampo('not_video.descripcion');
			if(trim($buscador_not_video_descripcion_comparador) == '') $buscador_not_video_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_video_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_not_video_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotNoticia') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_not_video_not_noticia_id', Gral::getCmbFiltro(NotNoticia::getNotNoticiasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_video.not_noticia_id'), 'textbox')?>
        	<?php 
			$buscador_not_video_not_noticia_id_comparador = $criterio->getComparadorDeCampo('not_video.not_noticia_id');
			if(trim($buscador_not_video_not_noticia_id_comparador) == '') $buscador_not_video_not_noticia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_video_not_noticia_id_comparador', Criterio::getComparadoresCmb(), $buscador_not_video_not_noticia_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotTipoVideo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_not_video_not_tipo_video_id', Gral::getCmbFiltro(NotTipoVideo::getNotTipoVideosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_video.not_tipo_video_id'), 'textbox')?>
        	<?php 
			$buscador_not_video_not_tipo_video_id_comparador = $criterio->getComparadorDeCampo('not_video.not_tipo_video_id');
			if(trim($buscador_not_video_not_tipo_video_id_comparador) == '') $buscador_not_video_not_tipo_video_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_video_not_tipo_video_id_comparador', Criterio::getComparadoresCmb(), $buscador_not_video_not_tipo_video_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('URL Externa') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_video_codigo' type='text' class='textbox' id='buscador_not_video_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_video.codigo')) ?>' size='22' />
        	<?php 
			$buscador_not_video_codigo_comparador = $criterio->getComparadorDeCampo('not_video.codigo');
			if(trim($buscador_not_video_codigo_comparador) == '') $buscador_not_video_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_video_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_not_video_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('HTML Externo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_video_observacion' type='text' class='textbox' id='buscador_not_video_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_video.observacion')) ?>' size='22' />
        	<?php 
			$buscador_not_video_observacion_comparador = $criterio->getComparadorDeCampo('not_video.observacion');
			if(trim($buscador_not_video_observacion_comparador) == '') $buscador_not_video_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_video_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_not_video_observacion_comparador, 'textbox comparador') ?>
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

