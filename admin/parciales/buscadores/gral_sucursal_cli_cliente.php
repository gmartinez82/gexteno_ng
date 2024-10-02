<?php
include_once "_autoload.php";
$criterio = new Criterio(GralSucursalCliCliente::SES_CRITERIOS);
$criterio->addTabla('gral_sucursal_cli_cliente');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_sucursal_cli_cliente'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_cli_cliente_descripcion' type='text' class='textbox' id='buscador_gral_sucursal_cli_cliente_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_cli_cliente_descripcion_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.descripcion');
			if(trim($buscador_gral_sucursal_cli_cliente_descripcion_comparador) == '') $buscador_gral_sucursal_cli_cliente_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_gral_sucursal_id', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id'), 'textbox')?>
        	<?php 
			$buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.gral_sucursal_id');
			if(trim($buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador) == '') $buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.cli_cliente_id');
			if(trim($buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador) == '') $buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_cli_cliente_codigo' type='text' class='textbox' id='buscador_gral_sucursal_cli_cliente_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_cli_cliente_codigo_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.codigo');
			if(trim($buscador_gral_sucursal_cli_cliente_codigo_comparador) == '') $buscador_gral_sucursal_cli_cliente_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_sucursal_cli_cliente_observacion' type='text' class='textbox' id='buscador_gral_sucursal_cli_cliente_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_sucursal_cli_cliente_observacion_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.observacion');
			if(trim($buscador_gral_sucursal_cli_cliente_observacion_comparador) == '') $buscador_gral_sucursal_cli_cliente_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_sucursal_cli_cliente.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_sucursal_cli_cliente_estado_comparador = $criterio->getComparadorDeCampo('gral_sucursal_cli_cliente.estado');
			if(trim($buscador_gral_sucursal_cli_cliente_estado_comparador) == '') $buscador_gral_sucursal_cli_cliente_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_sucursal_cli_cliente_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_sucursal_cli_cliente_estado_comparador, 'textbox comparador') ?>
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

