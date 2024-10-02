<?php
include_once "_autoload.php";
$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
$criterio->addTabla('cli_centro_pedido');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_centro_pedido'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_descripcion' type='text' class='textbox' id='buscador_cli_centro_pedido_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_descripcion_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.descripcion');
			if(trim($buscador_cli_centro_pedido_descripcion_comparador) == '') $buscador_cli_centro_pedido_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_centro_pedido_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.cli_cliente_id');
			if(trim($buscador_cli_centro_pedido_cli_cliente_id_comparador) == '') $buscador_cli_centro_pedido_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.vta_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_cli_centro_pedido_vta_comprador_id_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.vta_comprador_id');
			if(trim($buscador_cli_centro_pedido_vta_comprador_id_comparador) == '') $buscador_cli_centro_pedido_vta_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_vta_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_vta_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Pais') ?></div>
		  <div class='dato' id='dato_buscador_cli_centro_pedido_geo_pais_id'>
			  <?php
				$cmb_geo_pais_id = $criterio->getValorDeCampo('geo_provincia.geo_pais_id');
					
				$c = new Criterio(GeoPais::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_pais');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmbF(null, $c),'Seleccione Pais'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_provincia.geo_pais_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_centro_pedido_x" elemento_id="buscador_geo_pais_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_centro_pedido_geo_pais_id_comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');
			if(trim($buscador_cli_centro_pedido_geo_pais_id_comparador) == '') $buscador_cli_centro_pedido_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_geo_pais_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Provincia') ?></div>
		  <div class='dato' id='dato_buscador_cli_centro_pedido_geo_provincia_id'>
			  <?php
				$cmb_geo_provincia_id = $criterio->getValorDeCampo('geo_localidad.geo_provincia_id');
					
				$c = new Criterio(GeoProvincia::SES_CRITERIOS);
				$c->add('geo_pais_id', $cmb_geo_pais_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_provincia');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_provincia_id', Gral::getCmbFiltro(GeoProvincia::getGeoProvinciasCmbF(null, $c),'Seleccione Provincia'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('geo_localidad.geo_provincia_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_centro_pedido_geo_pais_id" elemento_id="buscador_geo_provincia_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_centro_pedido_geo_provincia_id_comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');
			if(trim($buscador_cli_centro_pedido_geo_provincia_id_comparador) == '') $buscador_cli_centro_pedido_geo_provincia_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_provincia_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_geo_provincia_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Localidad') ?></div>
		  <div class='dato' id='dato_buscador_cli_centro_pedido_geo_localidad_id'>
			  <?php
				$cmb_geo_localidad_id = $criterio->getValorDeCampo('cli_centro_pedido.geo_localidad_id');
					
				$c = new Criterio(GeoLocalidad::SES_CRITERIOS);
				$c->add('geo_provincia_id', $cmb_geo_provincia_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('geo_localidad');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsCmbF(null, $c),'Seleccione Localidad'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.geo_localidad_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_cli_centro_pedido_geo_provincia_id" elemento_id="buscador_geo_localidad_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_cli_centro_pedido_geo_localidad_id_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.geo_localidad_id');
			if(trim($buscador_cli_centro_pedido_geo_localidad_id_comparador) == '') $buscador_cli_centro_pedido_geo_localidad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_geo_localidad_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_geo_localidad_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_domicilio' type='text' class='textbox' id='buscador_cli_centro_pedido_domicilio' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.domicilio')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_domicilio_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.domicilio');
			if(trim($buscador_cli_centro_pedido_domicilio_comparador) == '') $buscador_cli_centro_pedido_domicilio_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_domicilio_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_domicilio_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_email' type='text' class='textbox' id='buscador_cli_centro_pedido_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.email')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_email_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.email');
			if(trim($buscador_cli_centro_pedido_email_comparador) == '') $buscador_cli_centro_pedido_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_email_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_telefono' type='text' class='textbox' id='buscador_cli_centro_pedido_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.telefono')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_telefono_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.telefono');
			if(trim($buscador_cli_centro_pedido_telefono_comparador) == '') $buscador_cli_centro_pedido_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Responsable') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_responsable' type='text' class='textbox' id='buscador_cli_centro_pedido_responsable' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.responsable')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_responsable_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.responsable');
			if(trim($buscador_cli_centro_pedido_responsable_comparador) == '') $buscador_cli_centro_pedido_responsable_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_responsable_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_responsable_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_codigo' type='text' class='textbox' id='buscador_cli_centro_pedido_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_codigo_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.codigo');
			if(trim($buscador_cli_centro_pedido_codigo_comparador) == '') $buscador_cli_centro_pedido_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_centro_pedido_observacion' type='text' class='textbox' id='buscador_cli_centro_pedido_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_centro_pedido_observacion_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.observacion');
			if(trim($buscador_cli_centro_pedido_observacion_comparador) == '') $buscador_cli_centro_pedido_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_centro_pedido_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_centro_pedido.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_centro_pedido_estado_comparador = $criterio->getComparadorDeCampo('cli_centro_pedido.estado');
			if(trim($buscador_cli_centro_pedido_estado_comparador) == '') $buscador_cli_centro_pedido_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_centro_pedido_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_centro_pedido_estado_comparador, 'textbox comparador') ?>
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

