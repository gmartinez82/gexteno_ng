<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComprador::SES_CRITERIOS);
$criterio->addTabla('vta_comprador');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comprador'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_descripcion' type='text' class='textbox' id='buscador_vta_comprador_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comprador.descripcion');
			if(trim($buscador_vta_comprador_descripcion_comparador) == '') $buscador_vta_comprador_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_apellido' type='text' class='textbox' id='buscador_vta_comprador_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.apellido')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_apellido_comparador = $criterio->getComparadorDeCampo('vta_comprador.apellido');
			if(trim($buscador_vta_comprador_apellido_comparador) == '') $buscador_vta_comprador_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_nombre' type='text' class='textbox' id='buscador_vta_comprador_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.nombre')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_nombre_comparador = $criterio->getComparadorDeCampo('vta_comprador.nombre');
			if(trim($buscador_vta_comprador_nombre_comparador) == '') $buscador_vta_comprador_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaTipoComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comprador_vta_tipo_comprador_id', Gral::getCmbFiltro(VtaTipoComprador::getVtaTipoCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.vta_tipo_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comprador_vta_tipo_comprador_id_comparador = $criterio->getComparadorDeCampo('vta_comprador.vta_tipo_comprador_id');
			if(trim($buscador_vta_comprador_vta_tipo_comprador_id_comparador) == '') $buscador_vta_comprador_vta_tipo_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_vta_tipo_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_vta_tipo_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_vta_comprador_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_comprador_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_comprador_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_comprador_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_vta_comprador_geo_pais_id_comparador) == '') $buscador_vta_comprador_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_vta_comprador_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_comprador_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_comprador_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_comprador_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_vta_comprador_geo_provincia_id_comparador) == '') $buscador_vta_comprador_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_vta_comprador_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('vta_comprador.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_vta_comprador_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_vta_comprador_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_vta_comprador_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('vta_comprador.geo_localidad_id');
			if(trim($buscador_vta_comprador_geo_localidad_id_comparador) == '') $buscador_vta_comprador_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_email' type='text' class='textbox' id='buscador_vta_comprador_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.email')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_email_comparador = $criterio->getComparadorDeCampo('vta_comprador.email');
			if(trim($buscador_vta_comprador_email_comparador) == '') $buscador_vta_comprador_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_email_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_telefono' type='text' class='textbox' id='buscador_vta_comprador_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.telefono')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_telefono_comparador = $criterio->getComparadorDeCampo('vta_comprador.telefono');
			if(trim($buscador_vta_comprador_telefono_comparador) == '') $buscador_vta_comprador_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Celular') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_celular' type='text' class='textbox' id='buscador_vta_comprador_celular' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.celular')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_celular_comparador = $criterio->getComparadorDeCampo('vta_comprador.celular');
			if(trim($buscador_vta_comprador_celular_comparador) == '') $buscador_vta_comprador_celular_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_celular_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_celular_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_domicilio' type='text' class='textbox' id='buscador_vta_comprador_domicilio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.domicilio')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_domicilio_comparador = $criterio->getComparadorDeCampo('vta_comprador.domicilio');
			if(trim($buscador_vta_comprador_domicilio_comparador) == '') $buscador_vta_comprador_domicilio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_domicilio_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_domicilio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Porc Comision') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_porcentaje_comision' type='text' class='textbox' id='buscador_vta_comprador_porcentaje_comision' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.porcentaje_comision')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_porcentaje_comision_comparador = $criterio->getComparadorDeCampo('vta_comprador.porcentaje_comision');
			if(trim($buscador_vta_comprador_porcentaje_comision_comparador) == '') $buscador_vta_comprador_porcentaje_comision_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_porcentaje_comision_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_porcentaje_comision_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_codigo' type='text' class='textbox' id='buscador_vta_comprador_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_codigo_comparador = $criterio->getComparadorDeCampo('vta_comprador.codigo');
			if(trim($buscador_vta_comprador_codigo_comparador) == '') $buscador_vta_comprador_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comprador_observacion' type='text' class='textbox' id='buscador_vta_comprador_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comprador_observacion_comparador = $criterio->getComparadorDeCampo('vta_comprador.observacion');
			if(trim($buscador_vta_comprador_observacion_comparador) == '') $buscador_vta_comprador_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comprador_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comprador.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comprador_estado_comparador = $criterio->getComparadorDeCampo('vta_comprador.estado');
			if(trim($buscador_vta_comprador_estado_comparador) == '') $buscador_vta_comprador_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comprador_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comprador_estado_comparador, 'textbox comparador') ?>
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

