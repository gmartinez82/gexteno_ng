<?php
include_once "_autoload.php";
$criterio = new Criterio(GeoLocalidad::SES_CRITERIOS);
$criterio->addTabla('geo_localidad');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='geo_localidad'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_localidad_descripcion' type='text' class='textbox' id='buscador_geo_localidad_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_geo_localidad_descripcion_comparador = $criterio->getComparadorDeCampo('geo_localidad.descripcion');
			if(trim($buscador_geo_localidad_descripcion_comparador) == '') $buscador_geo_localidad_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_geo_localidad_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_geo_localidad_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_geo_localidad_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_geo_localidad_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_geo_localidad_geo_pais_id_comparador) == '') $buscador_geo_localidad_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_geo_localidad_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_geo_localidad_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_geo_localidad_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_geo_localidad_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_geo_localidad_geo_provincia_id_comparador) == '') $buscador_geo_localidad_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_localidad_codigo' type='text' class='textbox' id='buscador_geo_localidad_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.codigo')) ?>' size='22' />
        	<?php 
			$buscador_geo_localidad_codigo_comparador = $criterio->getComparadorDeCampo('geo_localidad.codigo');
			if(trim($buscador_geo_localidad_codigo_comparador) == '') $buscador_geo_localidad_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_geo_localidad_observacion' type='text' class='textbox' id='buscador_geo_localidad_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.observacion')) ?>' size='22' />
        	<?php 
			$buscador_geo_localidad_observacion_comparador = $criterio->getComparadorDeCampo('geo_localidad.observacion');
			if(trim($buscador_geo_localidad_observacion_comparador) == '') $buscador_geo_localidad_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_geo_localidad_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_geo_localidad_estado_comparador = $criterio->getComparadorDeCampo('geo_localidad.estado');
			if(trim($buscador_geo_localidad_estado_comparador) == '') $buscador_geo_localidad_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_geo_localidad_estado_comparador', Criterio::getComparadoresCmb(), $buscador_geo_localidad_estado_comparador, 'textbox comparador') ?>
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

