<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
$criterio->addTabla('prv_proveedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_proveedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_descripcion' type='text' class='textbox' id='buscador_prv_proveedor_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_descripcion_comparador = $criterio->getComparadorDeCampo('prv_proveedor.descripcion');
			if(trim($buscador_prv_proveedor_descripcion_comparador) == '') $buscador_prv_proveedor_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor.gral_tipo_personeria_id');
			if(trim($buscador_prv_proveedor_gral_tipo_personeria_id_comparador) == '') $buscador_prv_proveedor_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor.gral_condicion_iva_id');
			if(trim($buscador_prv_proveedor_gral_condicion_iva_id_comparador) == '') $buscador_prv_proveedor_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_prv_proveedor_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_prv_proveedor_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_prv_proveedor_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_prv_proveedor_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_prv_proveedor_geo_pais_id_comparador) == '') $buscador_prv_proveedor_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_prv_proveedor_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_prv_proveedor_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_prv_proveedor_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_prv_proveedor_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_prv_proveedor_geo_provincia_id_comparador) == '') $buscador_prv_proveedor_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_prv_proveedor_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('prv_proveedor.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_prv_proveedor_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_prv_proveedor_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_prv_proveedor_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor.geo_localidad_id');
			if(trim($buscador_prv_proveedor_geo_localidad_id_comparador) == '') $buscador_prv_proveedor_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_razon_social' type='text' class='textbox' id='buscador_prv_proveedor_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_razon_social_comparador = $criterio->getComparadorDeCampo('prv_proveedor.razon_social');
			if(trim($buscador_prv_proveedor_razon_social_comparador) == '') $buscador_prv_proveedor_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_cuit' type='text' class='textbox' id='buscador_prv_proveedor_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.cuit')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_cuit_comparador = $criterio->getComparadorDeCampo('prv_proveedor.cuit');
			if(trim($buscador_prv_proveedor_cuit_comparador) == '') $buscador_prv_proveedor_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_domicilio_legal' type='text' class='textbox' id='buscador_prv_proveedor_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_domicilio_legal_comparador = $criterio->getComparadorDeCampo('prv_proveedor.domicilio_legal');
			if(trim($buscador_prv_proveedor_domicilio_legal_comparador) == '') $buscador_prv_proveedor_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_telefono' type='text' class='textbox' id='buscador_prv_proveedor_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.telefono')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_telefono_comparador = $criterio->getComparadorDeCampo('prv_proveedor.telefono');
			if(trim($buscador_prv_proveedor_telefono_comparador) == '') $buscador_prv_proveedor_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_email' type='text' class='textbox' id='buscador_prv_proveedor_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.email')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_email_comparador = $criterio->getComparadorDeCampo('prv_proveedor.email');
			if(trim($buscador_prv_proveedor_email_comparador) == '') $buscador_prv_proveedor_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_email_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_codigo' type='text' class='textbox' id='buscador_prv_proveedor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_codigo_comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo');
			if(trim($buscador_prv_proveedor_codigo_comparador) == '') $buscador_prv_proveedor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Min') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_codigo_min' type='text' class='textbox' id='buscador_prv_proveedor_codigo_min' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.codigo_min')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_codigo_min_comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo_min');
			if(trim($buscador_prv_proveedor_codigo_min_comparador) == '') $buscador_prv_proveedor_codigo_min_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_codigo_min_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_codigo_min_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvGrupo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_prv_grupo_id', Gral::getCmbFiltro(PrvGrupo::getPrvGruposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.prv_grupo_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_prv_grupo_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor.prv_grupo_id');
			if(trim($buscador_prv_proveedor_prv_grupo_id_comparador) == '') $buscador_prv_proveedor_prv_grupo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_prv_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_prv_grupo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_prv_categoria_id', Gral::getCmbFiltro(PrvCategoria::getPrvCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.prv_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_prv_categoria_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor.prv_categoria_id');
			if(trim($buscador_prv_proveedor_prv_categoria_id_comparador) == '') $buscador_prv_proveedor_prv_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_prv_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_prv_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_codigo_postal' type='text' class='textbox' id='buscador_prv_proveedor_codigo_postal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.codigo_postal')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_codigo_postal_comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo_postal');
			if(trim($buscador_prv_proveedor_codigo_postal_comparador) == '') $buscador_prv_proveedor_codigo_postal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_codigo_postal_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_codigo_postal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_puntaje_promedio' type='text' class='textbox' id='buscador_prv_proveedor_puntaje_promedio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.puntaje_promedio')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_puntaje_promedio_comparador = $criterio->getComparadorDeCampo('prv_proveedor.puntaje_promedio');
			if(trim($buscador_prv_proveedor_puntaje_promedio_comparador) == '') $buscador_prv_proveedor_puntaje_promedio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_puntaje_promedio_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_puntaje_promedio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_observacion' type='text' class='textbox' id='buscador_prv_proveedor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_observacion_comparador = $criterio->getComparadorDeCampo('prv_proveedor.observacion');
			if(trim($buscador_prv_proveedor_observacion_comparador) == '') $buscador_prv_proveedor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Datos Migracion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_datos_migracion' type='text' class='textbox' id='buscador_prv_proveedor_datos_migracion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.datos_migracion')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_datos_migracion_comparador = $criterio->getComparadorDeCampo('prv_proveedor.datos_migracion');
			if(trim($buscador_prv_proveedor_datos_migracion_comparador) == '') $buscador_prv_proveedor_datos_migracion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_datos_migracion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_datos_migracion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_proveedor_claves' type='text' class='textbox' id='buscador_prv_proveedor_claves' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor.claves')) ?>' size='22' />
        	<?php 
			$buscador_prv_proveedor_claves_comparador = $criterio->getComparadorDeCampo('prv_proveedor.claves');
			if(trim($buscador_prv_proveedor_claves_comparador) == '') $buscador_prv_proveedor_claves_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_claves_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_claves_comparador, 'textbox comparador') ?>
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

