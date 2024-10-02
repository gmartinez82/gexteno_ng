<?php
include_once "_autoload.php";
$criterio = new Criterio(FndChqTipoEmisorFndChqTipoEstado::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_tipo_emisor_fnd_chq_tipo_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_chq_tipo_emisor_fnd_chq_tipo_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEmisor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndChqTipoEstadoPosible') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible', Gral::getCmbFiltro(FndChqTipoEstado::getFndChqTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cambio Automatico') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cambio Manual') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Predeterminado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cambio Otro Comprobante') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cambio Simultaneo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion' type='text' class='textbox' id='buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado');
			if(trim($buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador) == '') $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador, 'textbox comparador') ?>
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

