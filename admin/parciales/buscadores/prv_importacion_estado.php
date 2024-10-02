<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvImportacionEstado::SES_CRITERIOS);
$criterio->addTabla('prv_importacion_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_importacion_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_estado_descripcion' type='text' class='textbox' id='buscador_prv_importacion_estado_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_estado.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_estado_descripcion_comparador = $criterio->getComparadorDeCampo('prv_importacion_estado.descripcion');
			if(trim($buscador_prv_importacion_estado_descripcion_comparador) == '') $buscador_prv_importacion_estado_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_estado_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_estado_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvImportacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_estado_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_estado.prv_importacion_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_estado_prv_importacion_id_comparador = $criterio->getComparadorDeCampo('prv_importacion_estado.prv_importacion_id');
			if(trim($buscador_prv_importacion_estado_prv_importacion_id_comparador) == '') $buscador_prv_importacion_estado_prv_importacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_estado_prv_importacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_estado_prv_importacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvImportacionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_importacion_estado_prv_importacion_tipo_estado_id', Gral::getCmbFiltro(PrvImportacionTipoEstado::getPrvImportacionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_estado.prv_importacion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('prv_importacion_estado.prv_importacion_tipo_estado_id');
			if(trim($buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador) == '') $buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_estado_codigo' type='text' class='textbox' id='buscador_prv_importacion_estado_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_estado.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_estado_codigo_comparador = $criterio->getComparadorDeCampo('prv_importacion_estado.codigo');
			if(trim($buscador_prv_importacion_estado_codigo_comparador) == '') $buscador_prv_importacion_estado_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_estado_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_estado_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observacion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_importacion_estado_observacion' type='text' class='textbox' id='buscador_prv_importacion_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_importacion_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_importacion_estado_observacion_comparador = $criterio->getComparadorDeCampo('prv_importacion_estado.observacion');
			if(trim($buscador_prv_importacion_estado_observacion_comparador) == '') $buscador_prv_importacion_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_importacion_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_importacion_estado_observacion_comparador, 'textbox comparador') ?>
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

