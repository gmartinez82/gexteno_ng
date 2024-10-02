<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPuntoVenta::SES_CRITERIOS);
$criterio->addTabla('vta_punto_venta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_punto_venta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_descripcion' type='text' class='textbox' id='buscador_vta_punto_venta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_descripcion_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.descripcion');
			if(trim($buscador_vta_punto_venta_descripcion_comparador) == '') $buscador_vta_punto_venta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.gral_empresa_id'), 'textbox')?>
        	<?php 
			$buscador_vta_punto_venta_gral_empresa_id_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.gral_empresa_id');
			if(trim($buscador_vta_punto_venta_gral_empresa_id_comparador) == '') $buscador_vta_punto_venta_gral_empresa_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_gral_empresa_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_gral_empresa_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_vta_punto_venta_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_punto_venta_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_punto_venta_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_vta_punto_venta_geo_pais_id_comparador) == '') $buscador_vta_punto_venta_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_vta_punto_venta_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_punto_venta_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_punto_venta_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_vta_punto_venta_geo_provincia_id_comparador) == '') $buscador_vta_punto_venta_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_vta_punto_venta_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('vta_punto_venta.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_punto_venta_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_punto_venta_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.geo_localidad_id');
			if(trim($buscador_vta_punto_venta_geo_localidad_id_comparador) == '') $buscador_vta_punto_venta_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Fiscal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_domicilio_fiscal' type='text' class='textbox' id='buscador_vta_punto_venta_domicilio_fiscal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.domicilio_fiscal')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_domicilio_fiscal_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.domicilio_fiscal');
			if(trim($buscador_vta_punto_venta_domicilio_fiscal_comparador) == '') $buscador_vta_punto_venta_domicilio_fiscal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_domicilio_fiscal_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_domicilio_fiscal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_codigo' type='text' class='textbox' id='buscador_vta_punto_venta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_codigo_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.codigo');
			if(trim($buscador_vta_punto_venta_codigo_comparador) == '') $buscador_vta_punto_venta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_numero' type='text' class='textbox' id='buscador_vta_punto_venta_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.numero')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_numero_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.numero');
			if(trim($buscador_vta_punto_venta_numero_comparador) == '') $buscador_vta_punto_venta_numero_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_numero_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Tipo de Emision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_tipo_emision' type='text' class='textbox' id='buscador_vta_punto_venta_tipo_emision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.tipo_emision')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_tipo_emision_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.tipo_emision');
			if(trim($buscador_vta_punto_venta_tipo_emision_comparador) == '') $buscador_vta_punto_venta_tipo_emision_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_tipo_emision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_tipo_emision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Bloqueado') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_bloqueado' type='text' class='textbox' id='buscador_vta_punto_venta_bloqueado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.bloqueado')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_bloqueado_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.bloqueado');
			if(trim($buscador_vta_punto_venta_bloqueado_comparador) == '') $buscador_vta_punto_venta_bloqueado_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_bloqueado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_bloqueado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha de Baja') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_fecha_baja' type='text' class='textbox' id='buscador_vta_punto_venta_fecha_baja' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.fecha_baja')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_fecha_baja_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.fecha_baja');
			if(trim($buscador_vta_punto_venta_fecha_baja_comparador) == '') $buscador_vta_punto_venta_fecha_baja_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_fecha_baja_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_fecha_baja_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Solicita CAE') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_punto_venta_solicita_cae', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.solicita_cae'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_punto_venta_solicita_cae_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.solicita_cae');
			if(trim($buscador_vta_punto_venta_solicita_cae_comparador) == '') $buscador_vta_punto_venta_solicita_cae_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_solicita_cae_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_solicita_cae_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_punto_venta_observacion' type='text' class='textbox' id='buscador_vta_punto_venta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_punto_venta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_punto_venta_observacion_comparador = $criterio->getComparadorDeCampo('vta_punto_venta.observacion');
			if(trim($buscador_vta_punto_venta_observacion_comparador) == '') $buscador_vta_punto_venta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_punto_venta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_punto_venta_observacion_comparador, 'textbox comparador') ?>
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

