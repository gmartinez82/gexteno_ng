<?php
include_once "_autoload.php";
$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
$criterio->addTabla('not_noticia_leida');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='not_noticia_leida'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_leida_descripcion' type='text' class='textbox' id='buscador_not_noticia_leida_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_leida_descripcion_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.descripcion');
			if(trim($buscador_not_noticia_leida_descripcion_comparador) == '') $buscador_not_noticia_leida_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NotNoticia') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_not_noticia_leida_not_noticia_id', Gral::getCmbFiltro(NotNoticia::getNotNoticiasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.not_noticia_id'), 'textbox')?>
        	<?php 
			$buscador_not_noticia_leida_not_noticia_id_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.not_noticia_id');
			if(trim($buscador_not_noticia_leida_not_noticia_id_comparador) == '') $buscador_not_noticia_leida_not_noticia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_not_noticia_id_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_not_noticia_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_leida_codigo' type='text' class='textbox' id='buscador_not_noticia_leida_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.codigo')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_leida_codigo_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.codigo');
			if(trim($buscador_not_noticia_leida_codigo_comparador) == '') $buscador_not_noticia_leida_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Sesion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_leida_sesion' type='text' class='textbox' id='buscador_not_noticia_leida_sesion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.sesion')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_leida_sesion_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.sesion');
			if(trim($buscador_not_noticia_leida_sesion_comparador) == '') $buscador_not_noticia_leida_sesion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_sesion_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_sesion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('IP') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_leida_numero_ip' type='text' class='textbox' id='buscador_not_noticia_leida_numero_ip' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.numero_ip')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_leida_numero_ip_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.numero_ip');
			if(trim($buscador_not_noticia_leida_numero_ip_comparador) == '') $buscador_not_noticia_leida_numero_ip_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_numero_ip_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_numero_ip_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_not_noticia_leida_observacion' type='text' class='textbox' id='buscador_not_noticia_leida_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('not_noticia_leida.observacion')) ?>' size='22' />
        	<?php 
			$buscador_not_noticia_leida_observacion_comparador = $criterio->getComparadorDeCampo('not_noticia_leida.observacion');
			if(trim($buscador_not_noticia_leida_observacion_comparador) == '') $buscador_not_noticia_leida_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_not_noticia_leida_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_not_noticia_leida_observacion_comparador, 'textbox comparador') ?>
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

