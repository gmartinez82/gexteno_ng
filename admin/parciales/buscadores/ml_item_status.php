<?php
include_once "_autoload.php";
$criterio = new Criterio(MlItemStatus::SES_CRITERIOS);
$criterio->addTabla('ml_item_status');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ml_item_status'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_item_status_descripcion' type='text' class='textbox' id='buscador_ml_item_status_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ml_item_status_descripcion_comparador = $criterio->getComparadorDeCampo('ml_item_status.descripcion');
			if(trim($buscador_ml_item_status_descripcion_comparador) == '') $buscador_ml_item_status_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_item_status_codigo' type='text' class='textbox' id='buscador_ml_item_status_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ml_item_status_codigo_comparador = $criterio->getComparadorDeCampo('ml_item_status.codigo');
			if(trim($buscador_ml_item_status_codigo_comparador) == '') $buscador_ml_item_status_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo ML') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_item_status_codigo_ml' type='text' class='textbox' id='buscador_ml_item_status_codigo_ml' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.codigo_ml')) ?>' size='22' />
        	<?php 
			$buscador_ml_item_status_codigo_ml_comparador = $criterio->getComparadorDeCampo('ml_item_status.codigo_ml');
			if(trim($buscador_ml_item_status_codigo_ml_comparador) == '') $buscador_ml_item_status_codigo_ml_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_codigo_ml_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_codigo_ml_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Activo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ml_item_status_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.activo'), 'textbox') ?>
		
        	<?php 
			$buscador_ml_item_status_activo_comparador = $criterio->getComparadorDeCampo('ml_item_status.activo');
			if(trim($buscador_ml_item_status_activo_comparador) == '') $buscador_ml_item_status_activo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_activo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_activo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inactivo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ml_item_status_inactivo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.inactivo'), 'textbox') ?>
		
        	<?php 
			$buscador_ml_item_status_inactivo_comparador = $criterio->getComparadorDeCampo('ml_item_status.inactivo');
			if(trim($buscador_ml_item_status_inactivo_comparador) == '') $buscador_ml_item_status_inactivo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_inactivo_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_inactivo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Req Atencion') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ml_item_status_requiere_atencion', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.requiere_atencion'), 'textbox') ?>
		
        	<?php 
			$buscador_ml_item_status_requiere_atencion_comparador = $criterio->getComparadorDeCampo('ml_item_status.requiere_atencion');
			if(trim($buscador_ml_item_status_requiere_atencion_comparador) == '') $buscador_ml_item_status_requiere_atencion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_requiere_atencion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_requiere_atencion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ml_item_status_observacion' type='text' class='textbox' id='buscador_ml_item_status_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ml_item_status.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ml_item_status_observacion_comparador = $criterio->getComparadorDeCampo('ml_item_status.observacion');
			if(trim($buscador_ml_item_status_observacion_comparador) == '') $buscador_ml_item_status_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ml_item_status_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ml_item_status_observacion_comparador, 'textbox comparador') ?>
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

