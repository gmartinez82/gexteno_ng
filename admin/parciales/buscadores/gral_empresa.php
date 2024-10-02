<?php
include_once "_autoload.php";
$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
$criterio->addTabla('gral_empresa');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_empresa'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_descripcion' type='text' class='textbox' id='buscador_gral_empresa_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_descripcion_comparador = $criterio->getComparadorDeCampo('gral_empresa.descripcion');
			if(trim($buscador_gral_empresa_descripcion_comparador) == '') $buscador_gral_empresa_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_empresa_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_gral_empresa_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('gral_empresa.gral_tipo_personeria_id');
			if(trim($buscador_gral_empresa_gral_tipo_personeria_id_comparador) == '') $buscador_gral_empresa_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_empresa_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_gral_empresa_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('gral_empresa.gral_condicion_iva_id');
			if(trim($buscador_gral_empresa_gral_condicion_iva_id_comparador) == '') $buscador_gral_empresa_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_gral_empresa_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_empresa_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_empresa_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_empresa_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_gral_empresa_geo_pais_id_comparador) == '') $buscador_gral_empresa_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_gral_empresa_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_empresa_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_empresa_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_empresa_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_gral_empresa_geo_provincia_id_comparador) == '') $buscador_gral_empresa_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_gral_empresa_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('gral_empresa.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_empresa_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_empresa_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_empresa_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('gral_empresa.geo_localidad_id');
			if(trim($buscador_gral_empresa_geo_localidad_id_comparador) == '') $buscador_gral_empresa_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CUIT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_cuit' type='text' class='textbox' id='buscador_gral_empresa_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.cuit')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_cuit_comparador = $criterio->getComparadorDeCampo('gral_empresa.cuit');
			if(trim($buscador_gral_empresa_cuit_comparador) == '') $buscador_gral_empresa_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_razon_social' type='text' class='textbox' id='buscador_gral_empresa_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_razon_social_comparador = $criterio->getComparadorDeCampo('gral_empresa.razon_social');
			if(trim($buscador_gral_empresa_razon_social_comparador) == '') $buscador_gral_empresa_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_codigo_postal' type='text' class='textbox' id='buscador_gral_empresa_codigo_postal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.codigo_postal')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_codigo_postal_comparador = $criterio->getComparadorDeCampo('gral_empresa.codigo_postal');
			if(trim($buscador_gral_empresa_codigo_postal_comparador) == '') $buscador_gral_empresa_codigo_postal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_codigo_postal_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_codigo_postal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_domicilio_legal' type='text' class='textbox' id='buscador_gral_empresa_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_domicilio_legal_comparador = $criterio->getComparadorDeCampo('gral_empresa.domicilio_legal');
			if(trim($buscador_gral_empresa_domicilio_legal_comparador) == '') $buscador_gral_empresa_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_telefono' type='text' class='textbox' id='buscador_gral_empresa_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.telefono')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_telefono_comparador = $criterio->getComparadorDeCampo('gral_empresa.telefono');
			if(trim($buscador_gral_empresa_telefono_comparador) == '') $buscador_gral_empresa_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_email' type='text' class='textbox' id='buscador_gral_empresa_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.email')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_email_comparador = $criterio->getComparadorDeCampo('gral_empresa.email');
			if(trim($buscador_gral_empresa_email_comparador) == '') $buscador_gral_empresa_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_email_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha Inicio Act') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_fecha_inicio_actividad' type='text' class='textbox' id='buscador_gral_empresa_fecha_inicio_actividad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('gral_empresa.fecha_inicio_actividad'))) ?>' size='15' />
					<input type='button' id='cal_buscador_gral_empresa_fecha_inicio_actividad' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_gral_empresa_fecha_inicio_actividad', ifFormat: '%d/%m/%Y', button: 'cal_buscador_gral_empresa_fecha_inicio_actividad'
						});
					</script>
		
        	<?php 
			$buscador_gral_empresa_fecha_inicio_actividad_comparador = $criterio->getComparadorDeCampo('gral_empresa.fecha_inicio_actividad');
			if(trim($buscador_gral_empresa_fecha_inicio_actividad_comparador) == '') $buscador_gral_empresa_fecha_inicio_actividad_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_fecha_inicio_actividad_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_fecha_inicio_actividad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_codigo' type='text' class='textbox' id='buscador_gral_empresa_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_codigo_comparador = $criterio->getComparadorDeCampo('gral_empresa.codigo');
			if(trim($buscador_gral_empresa_codigo_comparador) == '') $buscador_gral_empresa_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AFIP CRT') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_afip_crt' type='text' class='textbox' id='buscador_gral_empresa_afip_crt' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.afip_crt')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_afip_crt_comparador = $criterio->getComparadorDeCampo('gral_empresa.afip_crt');
			if(trim($buscador_gral_empresa_afip_crt_comparador) == '') $buscador_gral_empresa_afip_crt_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_afip_crt_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_afip_crt_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('AFIP KEY') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_afip_key' type='text' class='textbox' id='buscador_gral_empresa_afip_key' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.afip_key')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_afip_key_comparador = $criterio->getComparadorDeCampo('gral_empresa.afip_key');
			if(trim($buscador_gral_empresa_afip_key_comparador) == '') $buscador_gral_empresa_afip_key_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_afip_key_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_afip_key_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_empresa_observacion' type='text' class='textbox' id='buscador_gral_empresa_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_empresa_observacion_comparador = $criterio->getComparadorDeCampo('gral_empresa.observacion');
			if(trim($buscador_gral_empresa_observacion_comparador) == '') $buscador_gral_empresa_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_empresa_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_empresa.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_empresa_estado_comparador = $criterio->getComparadorDeCampo('gral_empresa.estado');
			if(trim($buscador_gral_empresa_estado_comparador) == '') $buscador_gral_empresa_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_empresa_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_empresa_estado_comparador, 'textbox comparador') ?>
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

