<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeRecepcionTipoEstado::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion_tipo_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_recepcion_tipo_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_tipo_estado_descripcion' type='text' class='textbox' id='buscador_pde_recepcion_tipo_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_tipo_estado_descripcion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.descripcion');
			if(trim($buscador_pde_recepcion_tipo_estado_descripcion_comparador) == '') $buscador_pde_recepcion_tipo_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_tipo_estado_codigo' type='text' class='textbox' id='buscador_pde_recepcion_tipo_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_tipo_estado_codigo_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.codigo');
			if(trim($buscador_pde_recepcion_tipo_estado_codigo_comparador) == '') $buscador_pde_recepcion_tipo_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Activo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.activo'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_tipo_estado_activo_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.activo');
			if(trim($buscador_pde_recepcion_tipo_estado_activo_comparador) == '') $buscador_pde_recepcion_tipo_estado_activo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_activo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_activo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Terminal') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_terminal', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.terminal'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_tipo_estado_terminal_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.terminal');
			if(trim($buscador_pde_recepcion_tipo_estado_terminal_comparador) == '') $buscador_pde_recepcion_tipo_estado_terminal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_terminal_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_terminal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Afecta Stock') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_afecta_stock', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.afecta_stock'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_recepcion_tipo_estado_afecta_stock_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.afecta_stock');
			if(trim($buscador_pde_recepcion_tipo_estado_afecta_stock_comparador) == '') $buscador_pde_recepcion_tipo_estado_afecta_stock_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_afecta_stock_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_afecta_stock_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_recepcion_tipo_estado_observacion' type='text' class='textbox' id='buscador_pde_recepcion_tipo_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_recepcion_tipo_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_recepcion_tipo_estado_observacion_comparador = $criterio->getComparadorDeCampo('pde_recepcion_tipo_estado.observacion');
			if(trim($buscador_pde_recepcion_tipo_estado_observacion_comparador) == '') $buscador_pde_recepcion_tipo_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_recepcion_tipo_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_recepcion_tipo_estado_observacion_comparador, 'textbox comparador') ?>
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

