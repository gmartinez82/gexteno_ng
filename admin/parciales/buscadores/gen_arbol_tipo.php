<?php
include_once "_autoload.php";
$criterio = new Criterio(GenArbolTipo::SES_CRITERIOS);
$criterio->addTabla('gen_arbol_tipo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_arbol_tipo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_tipo_descripcion' type='text' class='textbox' id='buscador_gen_arbol_tipo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol_tipo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_tipo_descripcion_comparador = $criterio->getComparadorDeCampo('gen_arbol_tipo.descripcion');
			if(trim($buscador_gen_arbol_tipo_descripcion_comparador) == '') $buscador_gen_arbol_tipo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_tipo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_tipo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_tipo_codigo' type='text' class='textbox' id='buscador_gen_arbol_tipo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol_tipo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_tipo_codigo_comparador = $criterio->getComparadorDeCampo('gen_arbol_tipo.codigo');
			if(trim($buscador_gen_arbol_tipo_codigo_comparador) == '') $buscador_gen_arbol_tipo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_tipo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_tipo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_arbol_tipo_observacion' type='text' class='textbox' id='buscador_gen_arbol_tipo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol_tipo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_arbol_tipo_observacion_comparador = $criterio->getComparadorDeCampo('gen_arbol_tipo.observacion');
			if(trim($buscador_gen_arbol_tipo_observacion_comparador) == '') $buscador_gen_arbol_tipo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_tipo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_tipo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_arbol_tipo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_arbol_tipo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_arbol_tipo_estado_comparador = $criterio->getComparadorDeCampo('gen_arbol_tipo.estado');
			if(trim($buscador_gen_arbol_tipo_estado_comparador) == '') $buscador_gen_arbol_tipo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_arbol_tipo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_arbol_tipo_estado_comparador, 'textbox comparador') ?>
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

