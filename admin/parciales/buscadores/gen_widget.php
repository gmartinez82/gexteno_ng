<?php
include_once "_autoload.php";
$criterio = new Criterio(GenWidget::SES_CRITERIOS);
$criterio->addTabla('gen_widget');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_widget'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_descripcion' type='text' class='textbox' id='buscador_gen_widget_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_descripcion_comparador = $criterio->getComparadorDeCampo('gen_widget.descripcion');
			if(trim($buscador_gen_widget_descripcion_comparador) == '') $buscador_gen_widget_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Widget Sector') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gen_widget_gen_widget_sector_id', Gral::getCmbFiltro(GenWidgetSector::getGenWidgetSectorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.gen_widget_sector_id'), 'textbox')?>
        	<?php 
			$buscador_gen_widget_gen_widget_sector_id_comparador = $criterio->getComparadorDeCampo('gen_widget.gen_widget_sector_id');
			if(trim($buscador_gen_widget_gen_widget_sector_id_comparador) == '') $buscador_gen_widget_gen_widget_sector_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_widget_gen_widget_sector_id_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_gen_widget_sector_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Ancho') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_ancho' type='text' class='textbox' id='buscador_gen_widget_ancho' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.ancho')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_ancho_comparador = $criterio->getComparadorDeCampo('gen_widget.ancho');
			if(trim($buscador_gen_widget_ancho_comparador) == '') $buscador_gen_widget_ancho_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_widget_ancho_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_ancho_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_codigo' type='text' class='textbox' id='buscador_gen_widget_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_codigo_comparador = $criterio->getComparadorDeCampo('gen_widget.codigo');
			if(trim($buscador_gen_widget_codigo_comparador) == '') $buscador_gen_widget_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_observacion' type='text' class='textbox' id='buscador_gen_widget_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_observacion_comparador = $criterio->getComparadorDeCampo('gen_widget.observacion');
			if(trim($buscador_gen_widget_observacion_comparador) == '') $buscador_gen_widget_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Orden') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_orden' type='text' class='textbox' id='buscador_gen_widget_orden' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.orden')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_orden_comparador = $criterio->getComparadorDeCampo('gen_widget.orden');
			if(trim($buscador_gen_widget_orden_comparador) == '') $buscador_gen_widget_orden_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_widget_orden_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_orden_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_widget_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_widget_estado_comparador = $criterio->getComparadorDeCampo('gen_widget.estado');
			if(trim($buscador_gen_widget_estado_comparador) == '') $buscador_gen_widget_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_widget_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_estado_comparador, 'textbox comparador') ?>
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

