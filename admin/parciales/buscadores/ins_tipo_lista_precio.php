<?php
include_once "_autoload.php";
$criterio = new Criterio(InsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTabla('ins_tipo_lista_precio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_tipo_lista_precio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_lista_precio_descripcion' type='text' class='textbox' id='buscador_ins_tipo_lista_precio_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_lista_precio_descripcion_comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.descripcion');
			if(trim($buscador_ins_tipo_lista_precio_descripcion_comparador) == '') $buscador_ins_tipo_lista_precio_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_lista_precio_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_lista_precio_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_lista_precio_descripcion_corta' type='text' class='textbox' id='buscador_ins_tipo_lista_precio_descripcion_corta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_lista_precio.descripcion_corta')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_lista_precio_descripcion_corta_comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.descripcion_corta');
			if(trim($buscador_ins_tipo_lista_precio_descripcion_corta_comparador) == '') $buscador_ins_tipo_lista_precio_descripcion_corta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_lista_precio_descripcion_corta_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_lista_precio_descripcion_corta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_lista_precio_codigo' type='text' class='textbox' id='buscador_ins_tipo_lista_precio_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_lista_precio.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_lista_precio_codigo_comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.codigo');
			if(trim($buscador_ins_tipo_lista_precio_codigo_comparador) == '') $buscador_ins_tipo_lista_precio_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_lista_precio_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_lista_precio_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Increm') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_lista_precio_porcentaje_incremento' type='text' class='textbox' id='buscador_ins_tipo_lista_precio_porcentaje_incremento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_lista_precio.porcentaje_incremento')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.porcentaje_incremento');
			if(trim($buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador) == '') $buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_lista_precio_observacion' type='text' class='textbox' id='buscador_ins_tipo_lista_precio_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_lista_precio.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_lista_precio_observacion_comparador = $criterio->getComparadorDeCampo('ins_tipo_lista_precio.observacion');
			if(trim($buscador_ins_tipo_lista_precio_observacion_comparador) == '') $buscador_ins_tipo_lista_precio_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_lista_precio_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_lista_precio_observacion_comparador, 'textbox comparador') ?>
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

