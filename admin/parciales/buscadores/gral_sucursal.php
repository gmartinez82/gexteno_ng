<?php
include_once "_autoload.php";
$criterio = new Criterio(GralSucursal::SES_CRITERIOS);
$criterio->addTabla('gral_sucursal');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_sucursal'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_descripcion' type='text' class='textbox' id='buscador_gral_sucursal_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_descripcion_comparador = $criterio->getComparadorDeCampo('gral_sucursal.descripcion');
			if(trim($buscador_gral_sucursal_descripcion_comparador) == '') $buscador_gral_sucursal_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_sucursal_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_gral_sucursal_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal.gral_empresa_id');
			if(trim($buscador_gral_sucursal_gral_empresa_id_comparador) == '') $buscador_gral_sucursal_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_domicilio' type='text' class='textbox' id='buscador_gral_sucursal_domicilio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.domicilio')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_domicilio_comparador = $criterio->getComparadorDeCampo('gral_sucursal.domicilio');
			if(trim($buscador_gral_sucursal_domicilio_comparador) == '') $buscador_gral_sucursal_domicilio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_domicilio_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_domicilio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_telefono' type='text' class='textbox' id='buscador_gral_sucursal_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.telefono')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_telefono_comparador = $criterio->getComparadorDeCampo('gral_sucursal.telefono');
			if(trim($buscador_gral_sucursal_telefono_comparador) == '') $buscador_gral_sucursal_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_email' type='text' class='textbox' id='buscador_gral_sucursal_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.email')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_email_comparador = $criterio->getComparadorDeCampo('gral_sucursal.email');
			if(trim($buscador_gral_sucursal_email_comparador) == '') $buscador_gral_sucursal_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_email_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_codigo_postal' type='text' class='textbox' id='buscador_gral_sucursal_codigo_postal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.codigo_postal')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_codigo_postal_comparador = $criterio->getComparadorDeCampo('gral_sucursal.codigo_postal');
			if(trim($buscador_gral_sucursal_codigo_postal_comparador) == '') $buscador_gral_sucursal_codigo_postal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_codigo_postal_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_codigo_postal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_gral_sucursal_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_sucursal_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_sucursal_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_sucursal_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_gral_sucursal_geo_pais_id_comparador) == '') $buscador_gral_sucursal_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_gral_sucursal_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_sucursal_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_sucursal_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_sucursal_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_gral_sucursal_geo_provincia_id_comparador) == '') $buscador_gral_sucursal_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_gral_sucursal_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('gral_sucursal.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_sucursal_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_sucursal_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_sucursal_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal.geo_localidad_id');
			if(trim($buscador_gral_sucursal_geo_localidad_id_comparador) == '') $buscador_gral_sucursal_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_codigo' type='text' class='textbox' id='buscador_gral_sucursal_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_codigo_comparador = $criterio->getComparadorDeCampo('gral_sucursal.codigo');
			if(trim($buscador_gral_sucursal_codigo_comparador) == '') $buscador_gral_sucursal_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_observacion' type='text' class='textbox' id='buscador_gral_sucursal_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_observacion_comparador = $criterio->getComparadorDeCampo('gral_sucursal.observacion');
			if(trim($buscador_gral_sucursal_observacion_comparador) == '') $buscador_gral_sucursal_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_sucursal_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_sucursal_estado_comparador = $criterio->getComparadorDeCampo('gral_sucursal.estado');
			if(trim($buscador_gral_sucursal_estado_comparador) == '') $buscador_gral_sucursal_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_estado_comparador, 'textbox comparador') ?>
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

