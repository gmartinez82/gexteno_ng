<?php
include_once "_autoload.php";
$criterio = new Criterio(NotRelacionada::SES_CRITERIOS);
$criterio->addTabla('not_relacionada');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='not_relacionada'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_relacionada_descripcion' type='text' class='textbox' id='buscador_not_relacionada_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_relacionada.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_not_relacionada_descripcion_comparador = $criterio->getComparadorDeCampo('not_relacionada.descripcion');
			if(trim($buscador_not_relacionada_descripcion_comparador) == '') $buscador_not_relacionada_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_relacionada_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_not_relacionada_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotNoticia') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_not_relacionada_not_noticia_id', Gral::getCmbFiltro(NotNoticia::getNotNoticiasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_relacionada.not_noticia_id'), 'textbox')?>
        	<?php 
			$buscador_not_relacionada_not_noticia_id_comparador = $criterio->getComparadorDeCampo('not_relacionada.not_noticia_id');
			if(trim($buscador_not_relacionada_not_noticia_id_comparador) == '') $buscador_not_relacionada_not_noticia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_relacionada_not_noticia_id_comparador', Criterio::getComparadoresCmb(), $buscador_not_relacionada_not_noticia_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotNoticiaRelacionada') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_not_relacionada_not_noticia_relacionada', Gral::getCmbFiltro(NotNoticia::getNotNoticiasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_relacionada.not_noticia_relacionada'), 'textbox') ?>
		
        	<?php 
			$buscador_not_relacionada_not_noticia_relacionada_comparador = $criterio->getComparadorDeCampo('not_relacionada.not_noticia_relacionada');
			if(trim($buscador_not_relacionada_not_noticia_relacionada_comparador) == '') $buscador_not_relacionada_not_noticia_relacionada_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_relacionada_not_noticia_relacionada_comparador', Criterio::getComparadoresCmb(), $buscador_not_relacionada_not_noticia_relacionada_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_relacionada_codigo' type='text' class='textbox' id='buscador_not_relacionada_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_relacionada.codigo')) ?>' size='22' />
        	<?php 
			$buscador_not_relacionada_codigo_comparador = $criterio->getComparadorDeCampo('not_relacionada.codigo');
			if(trim($buscador_not_relacionada_codigo_comparador) == '') $buscador_not_relacionada_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_relacionada_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_not_relacionada_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_relacionada_observacion' type='text' class='textbox' id='buscador_not_relacionada_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_relacionada.observacion')) ?>' size='22' />
        	<?php 
			$buscador_not_relacionada_observacion_comparador = $criterio->getComparadorDeCampo('not_relacionada.observacion');
			if(trim($buscador_not_relacionada_observacion_comparador) == '') $buscador_not_relacionada_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_relacionada_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_not_relacionada_observacion_comparador, 'textbox comparador') ?>
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

