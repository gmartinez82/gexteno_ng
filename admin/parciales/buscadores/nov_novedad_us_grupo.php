<?php
include_once "_autoload.php";
$criterio = new Criterio(NovNovedadUsGrupo::SES_CRITERIOS);
$criterio->addTabla('nov_novedad_us_grupo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='nov_novedad_us_grupo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('NovNovedad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_nov_novedad_id', Gral::getCmbFiltro(NovNovedad::getNovNovedadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_us_grupo.nov_novedad_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_us_grupo_nov_novedad_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.nov_novedad_id');
			if(trim($buscador_nov_novedad_us_grupo_nov_novedad_id_comparador) == '') $buscador_nov_novedad_us_grupo_nov_novedad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_nov_novedad_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_us_grupo_nov_novedad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsGrupo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_us_grupo.us_grupo_id'), 'textbox')?>
        	<?php 
			$buscador_nov_novedad_us_grupo_us_grupo_id_comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.us_grupo_id');
			if(trim($buscador_nov_novedad_us_grupo_us_grupo_id_comparador) == '') $buscador_nov_novedad_us_grupo_us_grupo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_us_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_us_grupo_us_grupo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_us_grupo_descripcion' type='text' class='textbox' id='buscador_nov_novedad_us_grupo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_us_grupo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_us_grupo_descripcion_comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.descripcion');
			if(trim($buscador_nov_novedad_us_grupo_descripcion_comparador) == '') $buscador_nov_novedad_us_grupo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_us_grupo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_us_grupo_codigo' type='text' class='textbox' id='buscador_nov_novedad_us_grupo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_us_grupo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_us_grupo_codigo_comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.codigo');
			if(trim($buscador_nov_novedad_us_grupo_codigo_comparador) == '') $buscador_nov_novedad_us_grupo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_us_grupo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_nov_novedad_us_grupo_observacion' type='text' class='textbox' id='buscador_nov_novedad_us_grupo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('nov_novedad_us_grupo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_nov_novedad_us_grupo_observacion_comparador = $criterio->getComparadorDeCampo('nov_novedad_us_grupo.observacion');
			if(trim($buscador_nov_novedad_us_grupo_observacion_comparador) == '') $buscador_nov_novedad_us_grupo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_nov_novedad_us_grupo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_nov_novedad_us_grupo_observacion_comparador, 'textbox comparador') ?>
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

