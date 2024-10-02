<?php
include_once "_autoload.php";
$criterio = new Criterio(CliTelefono::SES_CRITERIOS);
$criterio->addTabla('cli_telefono');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_telefono'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_telefono_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_telefono_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_telefono.cli_cliente_id');
			if(trim($buscador_cli_telefono_cli_cliente_id_comparador) == '') $buscador_cli_telefono_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliTelefonoTipo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_telefono_cli_telefono_tipo_id', Gral::getCmbFiltro(CliTelefonoTipo::getCliTelefonoTiposCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.cli_telefono_tipo_id'), 'textbox')?>
        	<?php 
			$buscador_cli_telefono_cli_telefono_tipo_id_comparador = $criterio->getComparadorDeCampo('cli_telefono.cli_telefono_tipo_id');
			if(trim($buscador_cli_telefono_cli_telefono_tipo_id_comparador) == '') $buscador_cli_telefono_cli_telefono_tipo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_cli_telefono_tipo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_cli_telefono_tipo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_descripcion' type='text' class='textbox' id='buscador_cli_telefono_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_descripcion_comparador = $criterio->getComparadorDeCampo('cli_telefono.descripcion');
			if(trim($buscador_cli_telefono_descripcion_comparador) == '') $buscador_cli_telefono_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GeoPais') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_telefono_geo_pais_id', Gral::getCmbFiltro(GeoPais::getGeoPaissCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.geo_pais_id'), 'textbox')?>
        	<?php 
			$buscador_cli_telefono_geo_pais_id_comparador = $criterio->getComparadorDeCampo('cli_telefono.geo_pais_id');
			if(trim($buscador_cli_telefono_geo_pais_id_comparador) == '') $buscador_cli_telefono_geo_pais_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_geo_pais_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_geo_pais_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Area') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_codigo' type='text' class='textbox' id='buscador_cli_telefono_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_codigo_comparador = $criterio->getComparadorDeCampo('cli_telefono.codigo');
			if(trim($buscador_cli_telefono_codigo_comparador) == '') $buscador_cli_telefono_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_telefono' type='text' class='textbox' id='buscador_cli_telefono_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.telefono')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_telefono_comparador = $criterio->getComparadorDeCampo('cli_telefono.telefono');
			if(trim($buscador_cli_telefono_telefono_comparador) == '') $buscador_cli_telefono_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_observacion' type='text' class='textbox' id='buscador_cli_telefono_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_observacion_comparador = $criterio->getComparadorDeCampo('cli_telefono.observacion');
			if(trim($buscador_cli_telefono_observacion_comparador) == '') $buscador_cli_telefono_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_observacion_comparador, 'textbox comparador') ?>
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

