<?php
include_once "_autoload.php";
$criterio = new Criterio(AltModulo::SES_CRITERIOS);
$criterio->addTabla('alt_modulo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='alt_modulo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_modulo_descripcion' type='text' class='textbox' id='buscador_alt_modulo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_modulo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_alt_modulo_descripcion_comparador = $criterio->getComparadorDeCampo('alt_modulo.descripcion');
			if(trim($buscador_alt_modulo_descripcion_comparador) == '') $buscador_alt_modulo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_modulo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_modulo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_modulo_codigo' type='text' class='textbox' id='buscador_alt_modulo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_modulo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_alt_modulo_codigo_comparador = $criterio->getComparadorDeCampo('alt_modulo.codigo');
			if(trim($buscador_alt_modulo_codigo_comparador) == '') $buscador_alt_modulo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_modulo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_alt_modulo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_modulo_observacion' type='text' class='textbox' id='buscador_alt_modulo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_modulo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_alt_modulo_observacion_comparador = $criterio->getComparadorDeCampo('alt_modulo.observacion');
			if(trim($buscador_alt_modulo_observacion_comparador) == '') $buscador_alt_modulo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_modulo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_alt_modulo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Clase') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_modulo_clase' type='text' class='textbox' id='buscador_alt_modulo_clase' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_modulo.clase')) ?>' size='22' />
        	<?php 
			$buscador_alt_modulo_clase_comparador = $criterio->getComparadorDeCampo('alt_modulo.clase');
			if(trim($buscador_alt_modulo_clase_comparador) == '') $buscador_alt_modulo_clase_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_modulo_clase_comparador', Criterio::getComparadoresCmb(), $buscador_alt_modulo_clase_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tabla') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_alt_modulo_tabla' type='text' class='textbox' id='buscador_alt_modulo_tabla' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('alt_modulo.tabla')) ?>' size='22' />
        	<?php 
			$buscador_alt_modulo_tabla_comparador = $criterio->getComparadorDeCampo('alt_modulo.tabla');
			if(trim($buscador_alt_modulo_tabla_comparador) == '') $buscador_alt_modulo_tabla_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_alt_modulo_tabla_comparador', Criterio::getComparadoresCmb(), $buscador_alt_modulo_tabla_comparador, 'textbox comparador') ?>
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

