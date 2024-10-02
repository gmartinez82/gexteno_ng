<?php
include_once "_autoload.php";
$criterio = new Criterio(GenArbol::SES_CRITERIOS);
$criterio->addTabla('gen_arbol');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_arbol'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_descripcion' type='text' class='textbox' id='buscador_gen_arbol_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_descripcion_comparador = $criterio->getComparadorDeCampo('gen_arbol.descripcion');
			if(trim($buscador_gen_arbol_descripcion_comparador) == '') $buscador_gen_arbol_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GenArbolTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_arbol_gen_arbol_tipo_id', Gral::getCmbFiltro(GenArbolTipo::getGenArbolTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.gen_arbol_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_gen_arbol_gen_arbol_tipo_id_comparador = $criterio->getComparadorDeCampo('gen_arbol.gen_arbol_tipo_id');
			if(trim($buscador_gen_arbol_gen_arbol_tipo_id_comparador) == '') $buscador_gen_arbol_gen_arbol_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_gen_arbol_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_gen_arbol_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_codigo' type='text' class='textbox' id='buscador_gen_arbol_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_codigo_comparador = $criterio->getComparadorDeCampo('gen_arbol.codigo');
			if(trim($buscador_gen_arbol_codigo_comparador) == '') $buscador_gen_arbol_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PHP Clase') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_php_clase' type='text' class='textbox' id='buscador_gen_arbol_php_clase' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.php_clase')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_php_clase_comparador = $criterio->getComparadorDeCampo('gen_arbol.php_clase');
			if(trim($buscador_gen_arbol_php_clase_comparador) == '') $buscador_gen_arbol_php_clase_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_php_clase_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_php_clase_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('BD Tabla') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_bd_tabla' type='text' class='textbox' id='buscador_gen_arbol_bd_tabla' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.bd_tabla')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_bd_tabla_comparador = $criterio->getComparadorDeCampo('gen_arbol.bd_tabla');
			if(trim($buscador_gen_arbol_bd_tabla_comparador) == '') $buscador_gen_arbol_bd_tabla_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_bd_tabla_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_bd_tabla_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_observacion' type='text' class='textbox' id='buscador_gen_arbol_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_observacion_comparador = $criterio->getComparadorDeCampo('gen_arbol.observacion');
			if(trim($buscador_gen_arbol_observacion_comparador) == '') $buscador_gen_arbol_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_arbol_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_arbol_estado_comparador = $criterio->getComparadorDeCampo('gen_arbol.estado');
			if(trim($buscador_gen_arbol_estado_comparador) == '') $buscador_gen_arbol_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_estado_comparador, 'textbox comparador') ?>
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

