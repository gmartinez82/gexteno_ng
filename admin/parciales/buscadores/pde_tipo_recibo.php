<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeTipoRecibo::SES_CRITERIOS);
$criterio->addTabla('pde_tipo_recibo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_tipo_recibo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recibo_descripcion' type='text' class='textbox' id='buscador_pde_tipo_recibo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recibo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recibo_descripcion_comparador = $criterio->getComparadorDeCampo('pde_tipo_recibo.descripcion');
			if(trim($buscador_pde_tipo_recibo_descripcion_comparador) == '') $buscador_pde_tipo_recibo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recibo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recibo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Min') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recibo_codigo_min' type='text' class='textbox' id='buscador_pde_tipo_recibo_codigo_min' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recibo.codigo_min')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recibo_codigo_min_comparador = $criterio->getComparadorDeCampo('pde_tipo_recibo.codigo_min');
			if(trim($buscador_pde_tipo_recibo_codigo_min_comparador) == '') $buscador_pde_tipo_recibo_codigo_min_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recibo_codigo_min_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recibo_codigo_min_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recibo_codigo' type='text' class='textbox' id='buscador_pde_tipo_recibo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recibo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recibo_codigo_comparador = $criterio->getComparadorDeCampo('pde_tipo_recibo.codigo');
			if(trim($buscador_pde_tipo_recibo_codigo_comparador) == '') $buscador_pde_tipo_recibo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recibo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recibo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_tipo_recibo_observacion' type='text' class='textbox' id='buscador_pde_tipo_recibo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recibo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_tipo_recibo_observacion_comparador = $criterio->getComparadorDeCampo('pde_tipo_recibo.observacion');
			if(trim($buscador_pde_tipo_recibo_observacion_comparador) == '') $buscador_pde_tipo_recibo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recibo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recibo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_tipo_recibo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_tipo_recibo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_tipo_recibo_estado_comparador = $criterio->getComparadorDeCampo('pde_tipo_recibo.estado');
			if(trim($buscador_pde_tipo_recibo_estado_comparador) == '') $buscador_pde_tipo_recibo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_tipo_recibo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_tipo_recibo_estado_comparador, 'textbox comparador') ?>
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

