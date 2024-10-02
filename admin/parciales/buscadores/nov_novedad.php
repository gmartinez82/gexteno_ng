<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedad::SES_CRITERIOS);
$criterio->addTabla('nov_novedad');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Titulo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_descripcion' type='text' class='textbox' id='buscador_nov_novedad_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion');
			if(trim($buscador_nov_novedad_descripcion_comparador) == '') $buscador_nov_novedad_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_codigo' type='text' class='textbox' id='buscador_nov_novedad_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad.codigo');
			if(trim($buscador_nov_novedad_codigo_comparador) == '') $buscador_nov_novedad_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Breve') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_descripcion_breve' type='text' class='textbox' id='buscador_nov_novedad_descripcion_breve' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.descripcion_breve')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_descripcion_breve_comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion_breve');
			if(trim($buscador_nov_novedad_descripcion_breve_comparador) == '') $buscador_nov_novedad_descripcion_breve_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_descripcion_breve_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_descripcion_breve_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_fecha' type='text' class='textbox' id='buscador_nov_novedad_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('nov_novedad.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_nov_novedad_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_nov_novedad_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_nov_novedad_fecha'
						});
					</script>
		
        	<?php 
			$buscador_nov_novedad_fecha_comparador = $criterio->getComparadorDeCampo('nov_novedad.fecha');
			if(trim($buscador_nov_novedad_fecha_comparador) == '') $buscador_nov_novedad_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Extendida') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_descripcion_extendida' type='text' class='textbox' id='buscador_nov_novedad_descripcion_extendida' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.descripcion_extendida')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_descripcion_extendida_comparador = $criterio->getComparadorDeCampo('nov_novedad.descripcion_extendida');
			if(trim($buscador_nov_novedad_descripcion_extendida_comparador) == '') $buscador_nov_novedad_descripcion_extendida_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_descripcion_extendida_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_descripcion_extendida_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_observacion' type='text' class='textbox' id='buscador_nov_novedad_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad.observacion');
			if(trim($buscador_nov_novedad_observacion_comparador) == '') $buscador_nov_novedad_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_nov_novedad_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_nov_novedad_estado_comparador = $criterio->getComparadorDeCampo('nov_novedad.estado');
			if(trim($buscador_nov_novedad_estado_comparador) == '') $buscador_nov_novedad_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_estado_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_estado_comparador, 'textbox comparador') ?>
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

