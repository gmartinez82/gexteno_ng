<?php
include_once "_autoload.php";
$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);
$criterio->addTabla('gen_menu_item');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_menu_item'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_menu_item_descripcion' type='text' class='textbox' id='buscador_gen_menu_item_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_menu_item_descripcion_comparador = $criterio->getComparadorDeCampo('gen_menu_item.descripcion');
			if(trim($buscador_gen_menu_item_descripcion_comparador) == '') $buscador_gen_menu_item_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenArbol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_menu_item_gen_arbol_id', Gral::getCmbFiltro(GenArbol::getGenArbolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.gen_arbol_id'), 'textbox')?>
        	<?php 
			$buscador_gen_menu_item_gen_arbol_id_comparador = $criterio->getComparadorDeCampo('gen_menu_item.gen_arbol_id');
			if(trim($buscador_gen_menu_item_gen_arbol_id_comparador) == '') $buscador_gen_menu_item_gen_arbol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_gen_arbol_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_gen_arbol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Padre') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_menu_item_gen_menu_item_padre', Gral::getCmbFiltro(GenMenuItem::getGenMenuItemsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.gen_menu_item_padre'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_menu_item_gen_menu_item_padre_comparador = $criterio->getComparadorDeCampo('gen_menu_item.gen_menu_item_padre');
			if(trim($buscador_gen_menu_item_gen_menu_item_padre_comparador) == '') $buscador_gen_menu_item_gen_menu_item_padre_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_gen_menu_item_padre_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_gen_menu_item_padre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_menu_item_codigo' type='text' class='textbox' id='buscador_gen_menu_item_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_menu_item_codigo_comparador = $criterio->getComparadorDeCampo('gen_menu_item.codigo');
			if(trim($buscador_gen_menu_item_codigo_comparador) == '') $buscador_gen_menu_item_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Alternativo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_menu_item_alternativo' type='text' class='textbox' id='buscador_gen_menu_item_alternativo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.alternativo')) ?>' size='22' />
        	<?php 
			$buscador_gen_menu_item_alternativo_comparador = $criterio->getComparadorDeCampo('gen_menu_item.alternativo');
			if(trim($buscador_gen_menu_item_alternativo_comparador) == '') $buscador_gen_menu_item_alternativo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_alternativo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_alternativo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('link') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_menu_item_link' type='text' class='textbox' id='buscador_gen_menu_item_link' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.link')) ?>' size='22' />
        	<?php 
			$buscador_gen_menu_item_link_comparador = $criterio->getComparadorDeCampo('gen_menu_item.link');
			if(trim($buscador_gen_menu_item_link_comparador) == '') $buscador_gen_menu_item_link_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_link_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_link_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_menu_item_observacion' type='text' class='textbox' id='buscador_gen_menu_item_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_menu_item_observacion_comparador = $criterio->getComparadorDeCampo('gen_menu_item.observacion');
			if(trim($buscador_gen_menu_item_observacion_comparador) == '') $buscador_gen_menu_item_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_menu_item_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_menu_item.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_menu_item_estado_comparador = $criterio->getComparadorDeCampo('gen_menu_item.estado');
			if(trim($buscador_gen_menu_item_estado_comparador) == '') $buscador_gen_menu_item_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_menu_item_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_menu_item_estado_comparador, 'textbox comparador') ?>
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

