<?php
include_once "_autoload.php";
$criterio = new Criterio(InsCategoria::SES_CRITERIOS);
$criterio->addTabla('ins_categoria');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_categoria'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_categoria_descripcion' type='text' class='textbox' id='buscador_ins_categoria_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_categoria_descripcion_comparador = $criterio->getComparadorDeCampo('ins_categoria.descripcion');
			if(trim($buscador_ins_categoria_descripcion_comparador) == '') $buscador_ins_categoria_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenArbol') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_categoria_gen_arbol_id', Gral::getCmbFiltro(GenArbol::getGenArbolsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.gen_arbol_id'), 'textbox')?>
        	<?php 
			$buscador_ins_categoria_gen_arbol_id_comparador = $criterio->getComparadorDeCampo('ins_categoria.gen_arbol_id');
			if(trim($buscador_ins_categoria_gen_arbol_id_comparador) == '') $buscador_ins_categoria_gen_arbol_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_gen_arbol_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_gen_arbol_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsCategoriaPadre') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_categoria_ins_categoria_padre', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.ins_categoria_padre'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_categoria_ins_categoria_padre_comparador = $criterio->getComparadorDeCampo('ins_categoria.ins_categoria_padre');
			if(trim($buscador_ins_categoria_ins_categoria_padre_comparador) == '') $buscador_ins_categoria_ins_categoria_padre_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_ins_categoria_padre_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_ins_categoria_padre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_categoria_codigo' type='text' class='textbox' id='buscador_ins_categoria_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_categoria_codigo_comparador = $criterio->getComparadorDeCampo('ins_categoria.codigo');
			if(trim($buscador_ins_categoria_codigo_comparador) == '') $buscador_ins_categoria_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_categoria_familia_descripcion' type='text' class='textbox' id='buscador_ins_categoria_familia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.familia_descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_categoria_familia_descripcion_comparador = $criterio->getComparadorDeCampo('ins_categoria.familia_descripcion');
			if(trim($buscador_ins_categoria_familia_descripcion_comparador) == '') $buscador_ins_categoria_familia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_familia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_familia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_categoria_observacion' type='text' class='textbox' id='buscador_ins_categoria_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_categoria_observacion_comparador = $criterio->getComparadorDeCampo('ins_categoria.observacion');
			if(trim($buscador_ins_categoria_observacion_comparador) == '') $buscador_ins_categoria_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_observacion_comparador, 'textbox comparador') ?>
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

