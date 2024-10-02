<?php
include_once "_autoload.php";
$criterio = new Criterio(InsMatriz::SES_CRITERIOS);
$criterio->addTabla('ins_matriz');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_matriz'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_matriz_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_matriz.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ins_matriz_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ins_matriz.ins_marca_id');
			if(trim($buscador_ins_matriz_ins_marca_id_comparador) == '') $buscador_ins_matriz_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_matriz_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_matriz_ins_marca_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CodigoPieza') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_matriz_codigo_pieza' type='text' class='textbox' id='buscador_ins_matriz_codigo_pieza' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_matriz.codigo_pieza')) ?>' size='22' />
        	<?php 
			$buscador_ins_matriz_codigo_pieza_comparador = $criterio->getComparadorDeCampo('ins_matriz.codigo_pieza');
			if(trim($buscador_ins_matriz_codigo_pieza_comparador) == '') $buscador_ins_matriz_codigo_pieza_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_matriz_codigo_pieza_comparador', Criterio::getComparadoresCmb(), $buscador_ins_matriz_codigo_pieza_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_matriz_codigo' type='text' class='textbox' id='buscador_ins_matriz_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_matriz.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_matriz_codigo_comparador = $criterio->getComparadorDeCampo('ins_matriz.codigo');
			if(trim($buscador_ins_matriz_codigo_comparador) == '') $buscador_ins_matriz_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_matriz_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_matriz_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_matriz_descripcion' type='text' class='textbox' id='buscador_ins_matriz_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_matriz.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_matriz_descripcion_comparador = $criterio->getComparadorDeCampo('ins_matriz.descripcion');
			if(trim($buscador_ins_matriz_descripcion_comparador) == '') $buscador_ins_matriz_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_matriz_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_matriz_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_matriz_observacion' type='text' class='textbox' id='buscador_ins_matriz_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_matriz.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_matriz_observacion_comparador = $criterio->getComparadorDeCampo('ins_matriz.observacion');
			if(trim($buscador_ins_matriz_observacion_comparador) == '') $buscador_ins_matriz_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_matriz_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_matriz_observacion_comparador, 'textbox comparador') ?>
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

