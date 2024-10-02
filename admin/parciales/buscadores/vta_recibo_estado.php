<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaReciboEstado::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_estado_descripcion' type='text' class='textbox' id='buscador_vta_recibo_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_estado_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.descripcion');
			if(trim($buscador_vta_recibo_estado_descripcion_comparador) == '') $buscador_vta_recibo_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaRecibo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado_vta_recibo_id', Gral::getCmbFiltro(VtaRecibo::getVtaRecibosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_estado_vta_recibo_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.vta_recibo_id');
			if(trim($buscador_vta_recibo_estado_vta_recibo_id_comparador) == '') $buscador_vta_recibo_estado_vta_recibo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_vta_recibo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_vta_recibo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaReciboTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado_vta_recibo_tipo_estado_id', Gral::getCmbFiltro(VtaReciboTipoEstado::getVtaReciboTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.vta_recibo_tipo_estado_id');
			if(trim($buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador) == '') $buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inicial') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado_inicial', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.inicial'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_estado_inicial_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.inicial');
			if(trim($buscador_vta_recibo_estado_inicial_comparador) == '') $buscador_vta_recibo_estado_inicial_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_inicial_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_inicial_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Actual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado_actual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.actual'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_estado_actual_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.actual');
			if(trim($buscador_vta_recibo_estado_actual_comparador) == '') $buscador_vta_recibo_estado_actual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_actual_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_actual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_estado_codigo' type='text' class='textbox' id='buscador_vta_recibo_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_estado_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.codigo');
			if(trim($buscador_vta_recibo_estado_codigo_comparador) == '') $buscador_vta_recibo_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_estado_observacion' type='text' class='textbox' id='buscador_vta_recibo_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_estado_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.observacion');
			if(trim($buscador_vta_recibo_estado_observacion_comparador) == '') $buscador_vta_recibo_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_estado_estado_comparador = $criterio->getComparadorDeCampo('vta_recibo_estado.estado');
			if(trim($buscador_vta_recibo_estado_estado_comparador) == '') $buscador_vta_recibo_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_estado_estado_comparador, 'textbox comparador') ?>
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

