<?php
include_once "_autoload.php";
$criterio = new Criterio(GralRutaGeoLocalidad::SES_CRITERIOS);
$criterio->addTabla('gral_ruta_geo_localidad');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_ruta_geo_localidad'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_geo_localidad_descripcion' type='text' class='textbox' id='buscador_gral_ruta_geo_localidad_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_geo_localidad_descripcion_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.descripcion');
			if(trim($buscador_gral_ruta_geo_localidad_descripcion_comparador) == '') $buscador_gral_ruta_geo_localidad_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralRuta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.gral_ruta_id'), 'textbox')?>
        	<?php 
			$buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.gral_ruta_id');
			if(trim($buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador) == '') $buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GeoLocalidad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.geo_localidad_id'), 'textbox')?>
        	<?php 
			$buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.geo_localidad_id');
			if(trim($buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador) == '') $buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_geo_localidad_codigo' type='text' class='textbox' id='buscador_gral_ruta_geo_localidad_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_geo_localidad_codigo_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.codigo');
			if(trim($buscador_gral_ruta_geo_localidad_codigo_comparador) == '') $buscador_gral_ruta_geo_localidad_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_ruta_geo_localidad_observacion' type='text' class='textbox' id='buscador_gral_ruta_geo_localidad_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_ruta_geo_localidad_observacion_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.observacion');
			if(trim($buscador_gral_ruta_geo_localidad_observacion_comparador) == '') $buscador_gral_ruta_geo_localidad_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_ruta_geo_localidad.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_ruta_geo_localidad_estado_comparador = $criterio->getComparadorDeCampo('gral_ruta_geo_localidad.estado');
			if(trim($buscador_gral_ruta_geo_localidad_estado_comparador) == '') $buscador_gral_ruta_geo_localidad_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_ruta_geo_localidad_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_ruta_geo_localidad_estado_comparador, 'textbox comparador') ?>
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

