<?php
include_once "_autoload.php";
$criterio = new Criterio(GeoProvincia::SES_CRITERIOS);
$criterio->addTabla('geo_provincia');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='geo_provincia'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_provincia_descripcion' type='text' class='textbox' id='buscador_geo_provincia_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_geo_provincia_descripcion_comparador = $criterio->getComparadorDeCampo('geo_provincia.descripcion');
			if(trim($buscador_geo_provincia_descripcion_comparador) == '') $buscador_geo_provincia_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_provincia_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_provincia_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_geo_provincia_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox')?>
        	<?php 
			$buscador_geo_provincia_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_geo_provincia_geo_pais_id_comparador) == '') $buscador_geo_provincia_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_provincia_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_geo_provincia_geo_pais_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_provincia_codigo' type='text' class='textbox' id='buscador_geo_provincia_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.codigo')) ?>' size='22' />
        	<?php 
			$buscador_geo_provincia_codigo_comparador = $criterio->getComparadorDeCampo('geo_provincia.codigo');
			if(trim($buscador_geo_provincia_codigo_comparador) == '') $buscador_geo_provincia_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_provincia_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_geo_provincia_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_provincia_observacion' type='text' class='textbox' id='buscador_geo_provincia_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.observacion')) ?>' size='22' />
        	<?php 
			$buscador_geo_provincia_observacion_comparador = $criterio->getComparadorDeCampo('geo_provincia.observacion');
			if(trim($buscador_geo_provincia_observacion_comparador) == '') $buscador_geo_provincia_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_provincia_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_provincia_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_geo_provincia_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_geo_provincia_estado_comparador = $criterio->getComparadorDeCampo('geo_provincia.estado');
			if(trim($buscador_geo_provincia_estado_comparador) == '') $buscador_geo_provincia_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_provincia_estado_comparador', Criterio::getComparadoresCmb(), $buscador_geo_provincia_estado_comparador, 'textbox comparador') ?>
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

