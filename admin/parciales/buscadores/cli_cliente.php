<?php
include_once "_autoload.php";
$criterio = new Criterio(CliCliente::SES_CRITERIOS);
$criterio->addTabla('cli_cliente');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_descripcion' type='text' class='textbox' id='buscador_cli_cliente_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_descripcion_comparador = $criterio->getComparadorDeCampo('cli_cliente.descripcion');
			if(trim($buscador_cli_cliente_descripcion_comparador) == '') $buscador_cli_cliente_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_gral_tipo_personeria_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_tipo_personeria_id');
			if(trim($buscador_cli_cliente_gral_tipo_personeria_id_comparador) == '') $buscador_cli_cliente_gral_tipo_personeria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_tipo_personeria_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_tipo_personeria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_gral_condicion_iva_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_condicion_iva_id');
			if(trim($buscador_cli_cliente_gral_condicion_iva_id_comparador) == '') $buscador_cli_cliente_gral_condicion_iva_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_condicion_iva_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_condicion_iva_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Razon Social') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_razon_social' type='text' class='textbox' id='buscador_cli_cliente_razon_social' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.razon_social')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_razon_social_comparador = $criterio->getComparadorDeCampo('cli_cliente.razon_social');
			if(trim($buscador_cli_cliente_razon_social_comparador) == '') $buscador_cli_cliente_razon_social_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_razon_social_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_razon_social_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_tipo_documento_id', Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_gral_tipo_documento_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_tipo_documento_id');
			if(trim($buscador_cli_cliente_gral_tipo_documento_id_comparador) == '') $buscador_cli_cliente_gral_tipo_documento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_tipo_documento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_tipo_documento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Documento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_cuit' type='text' class='textbox' id='buscador_cli_cliente_cuit' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cuit')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_cuit_comparador = $criterio->getComparadorDeCampo('cli_cliente.cuit');
			if(trim($buscador_cli_cliente_cuit_comparador) == '') $buscador_cli_cliente_cuit_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_cuit_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_cuit_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_domicilio_legal' type='text' class='textbox' id='buscador_cli_cliente_domicilio_legal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.domicilio_legal')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_domicilio_legal_comparador = $criterio->getComparadorDeCampo('cli_cliente.domicilio_legal');
			if(trim($buscador_cli_cliente_domicilio_legal_comparador) == '') $buscador_cli_cliente_domicilio_legal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_domicilio_legal_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_domicilio_legal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_telefono' type='text' class='textbox' id='buscador_cli_cliente_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.telefono')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_telefono_comparador = $criterio->getComparadorDeCampo('cli_cliente.telefono');
			if(trim($buscador_cli_cliente_telefono_comparador) == '') $buscador_cli_cliente_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_email' type='text' class='textbox' id='buscador_cli_cliente_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.email')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_email_comparador = $criterio->getComparadorDeCampo('cli_cliente.email');
			if(trim($buscador_cli_cliente_email_comparador) == '') $buscador_cli_cliente_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_email_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_codigo_postal' type='text' class='textbox' id='buscador_cli_cliente_codigo_postal' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.codigo_postal')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_codigo_postal_comparador = $criterio->getComparadorDeCampo('cli_cliente.codigo_postal');
			if(trim($buscador_cli_cliente_codigo_postal_comparador) == '') $buscador_cli_cliente_codigo_postal_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_codigo_postal_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_codigo_postal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_cli_cliente_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_cliente_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_cliente_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_cliente_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_cli_cliente_geo_pais_id_comparador) == '') $buscador_cli_cliente_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_cli_cliente_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_cliente_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_cliente_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_cliente_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_cli_cliente_geo_provincia_id_comparador) == '') $buscador_cli_cliente_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_cli_cliente_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('cli_cliente.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_cliente_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_cliente_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_cliente_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.geo_localidad_id');
			if(trim($buscador_cli_cliente_geo_localidad_id_comparador) == '') $buscador_cli_cliente_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_codigo' type='text' class='textbox' id='buscador_cli_cliente_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_codigo_comparador = $criterio->getComparadorDeCampo('cli_cliente.codigo');
			if(trim($buscador_cli_cliente_codigo_comparador) == '') $buscador_cli_cliente_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Limite Ctacte Imp') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_limite_ctacte_importe' type='text' class='textbox' id='buscador_cli_cliente_limite_ctacte_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.limite_ctacte_importe')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_limite_ctacte_importe_comparador = $criterio->getComparadorDeCampo('cli_cliente.limite_ctacte_importe');
			if(trim($buscador_cli_cliente_limite_ctacte_importe_comparador) == '') $buscador_cli_cliente_limite_ctacte_importe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_limite_ctacte_importe_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_limite_ctacte_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Limite Ctacte Dias') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_limite_ctacte_dias' type='text' class='textbox' id='buscador_cli_cliente_limite_ctacte_dias' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.limite_ctacte_dias')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_limite_ctacte_dias_comparador = $criterio->getComparadorDeCampo('cli_cliente.limite_ctacte_dias');
			if(trim($buscador_cli_cliente_limite_ctacte_dias_comparador) == '') $buscador_cli_cliente_limite_ctacte_dias_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_limite_ctacte_dias_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_limite_ctacte_dias_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliGrupo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_cli_grupo_id', Gral::getCmbFiltro(CliGrupo::getCliGruposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cli_grupo_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_cli_grupo_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.cli_grupo_id');
			if(trim($buscador_cli_cliente_cli_grupo_id_comparador) == '') $buscador_cli_cliente_cli_grupo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_cli_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_cli_grupo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_cli_categoria_id', Gral::getCmbFiltro(CliCategoria::getCliCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.cli_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_cli_categoria_id_comparador = $criterio->getComparadorDeCampo('cli_cliente.cli_categoria_id');
			if(trim($buscador_cli_cliente_cli_categoria_id_comparador) == '') $buscador_cli_cliente_cli_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_cli_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_cli_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_observacion' type='text' class='textbox' id='buscador_cli_cliente_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_observacion_comparador = $criterio->getComparadorDeCampo('cli_cliente.observacion');
			if(trim($buscador_cli_cliente_observacion_comparador) == '') $buscador_cli_cliente_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Datos Migracion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_datos_migracion' type='text' class='textbox' id='buscador_cli_cliente_datos_migracion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.datos_migracion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_datos_migracion_comparador = $criterio->getComparadorDeCampo('cli_cliente.datos_migracion');
			if(trim($buscador_cli_cliente_datos_migracion_comparador) == '') $buscador_cli_cliente_datos_migracion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_datos_migracion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_datos_migracion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_claves' type='text' class='textbox' id='buscador_cli_cliente_claves' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.claves')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_claves_comparador = $criterio->getComparadorDeCampo('cli_cliente.claves');
			if(trim($buscador_cli_cliente_claves_comparador) == '') $buscador_cli_cliente_claves_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_claves_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_claves_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_estado_comparador = $criterio->getComparadorDeCampo('cli_cliente.estado');
			if(trim($buscador_cli_cliente_estado_comparador) == '') $buscador_cli_cliente_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_estado_comparador, 'textbox comparador') ?>
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

