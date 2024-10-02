<?php
include_once "_autoload.php";
$criterio = new Criterio(GralEscenario::SES_CRITERIOS);
$criterio->addTabla('gral_escenario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_escenario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_escenario_descripcion' type='text' class='textbox' id='buscador_gral_escenario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_escenario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_escenario_descripcion_comparador = $criterio->getComparadorDeCampo('gral_escenario.descripcion');
			if(trim($buscador_gral_escenario_descripcion_comparador) == '') $buscador_gral_escenario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_escenario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_escenario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_escenario_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_escenario.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_gral_escenario_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('gral_escenario.gral_actividad_id');
			if(trim($buscador_gral_escenario_gral_actividad_id_comparador) == '') $buscador_gral_escenario_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_escenario_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_escenario_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_escenario_codigo' type='text' class='textbox' id='buscador_gral_escenario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_escenario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_escenario_codigo_comparador = $criterio->getComparadorDeCampo('gral_escenario.codigo');
			if(trim($buscador_gral_escenario_codigo_comparador) == '') $buscador_gral_escenario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_escenario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_escenario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_escenario_observacion' type='text' class='textbox' id='buscador_gral_escenario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_escenario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_escenario_observacion_comparador = $criterio->getComparadorDeCampo('gral_escenario.observacion');
			if(trim($buscador_gral_escenario_observacion_comparador) == '') $buscador_gral_escenario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_escenario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_escenario_observacion_comparador, 'textbox comparador') ?>
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

