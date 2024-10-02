<?php
include_once "_autoload.php";
$criterio = new Criterio(GenWidgetSector::SES_CRITERIOS);
$criterio->addTabla('gen_widget_sector');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gen_widget_sector'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_sector_descripcion' type='text' class='textbox' id='buscador_gen_widget_sector_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget_sector.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_sector_descripcion_comparador = $criterio->getComparadorDeCampo('gen_widget_sector.descripcion');
			if(trim($buscador_gen_widget_sector_descripcion_comparador) == '') $buscador_gen_widget_sector_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_sector_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_sector_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_sector_codigo' type='text' class='textbox' id='buscador_gen_widget_sector_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget_sector.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_sector_codigo_comparador = $criterio->getComparadorDeCampo('gen_widget_sector.codigo');
			if(trim($buscador_gen_widget_sector_codigo_comparador) == '') $buscador_gen_widget_sector_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_sector_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_sector_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gen_widget_sector_observacion' type='text' class='textbox' id='buscador_gen_widget_sector_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget_sector.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gen_widget_sector_observacion_comparador = $criterio->getComparadorDeCampo('gen_widget_sector.observacion');
			if(trim($buscador_gen_widget_sector_observacion_comparador) == '') $buscador_gen_widget_sector_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gen_widget_sector_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_sector_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gen_widget_sector_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gen_widget_sector.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gen_widget_sector_estado_comparador = $criterio->getComparadorDeCampo('gen_widget_sector.estado');
			if(trim($buscador_gen_widget_sector_estado_comparador) == '') $buscador_gen_widget_sector_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gen_widget_sector_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gen_widget_sector_estado_comparador, 'textbox comparador') ?>
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

