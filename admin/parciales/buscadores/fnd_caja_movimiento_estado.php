<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajaMovimientoEstado::SES_CRITERIOS);
$criterio->addTabla('fnd_caja_movimiento_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_caja_movimiento_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_estado_descripcion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_estado_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.descripcion');
			if(trim($buscador_fnd_caja_movimiento_estado_descripcion_comparador) == '') $buscador_fnd_caja_movimiento_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id', Gral::getCmbFiltro(FndCajaMovimiento::getFndCajaMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.fnd_caja_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.fnd_caja_movimiento_id');
			if(trim($buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id_comparador) == '') $buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id', Gral::getCmbFiltro(FndCajaMovimientoTipoEstado::getFndCajaMovimientoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.fnd_caja_movimiento_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.fnd_caja_movimiento_tipo_estado_id');
			if(trim($buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id_comparador) == '') $buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_fnd_caja_movimiento_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_estado_inicial_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.inicial');
			if(trim($buscador_fnd_caja_movimiento_estado_inicial_comparador) == '') $buscador_fnd_caja_movimiento_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_estado_actual_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.actual');
			if(trim($buscador_fnd_caja_movimiento_estado_actual_comparador) == '') $buscador_fnd_caja_movimiento_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_estado_codigo' type='text' class='textbox' id='buscador_fnd_caja_movimiento_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_estado_codigo_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.codigo');
			if(trim($buscador_fnd_caja_movimiento_estado_codigo_comparador) == '') $buscador_fnd_caja_movimiento_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_estado_observacion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_estado_observacion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.observacion');
			if(trim($buscador_fnd_caja_movimiento_estado_observacion_comparador) == '') $buscador_fnd_caja_movimiento_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_estado_estado_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento_estado.estado');
			if(trim($buscador_fnd_caja_movimiento_estado_estado_comparador) == '') $buscador_fnd_caja_movimiento_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_estado_comparador, 'textbox comparador') ?>
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

