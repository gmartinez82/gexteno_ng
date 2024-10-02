<?php
include_once "_autoload.php";
$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_vta_vendedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente_vta_vendedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_vendedor_descripcion' type='text' class='textbox' id='buscador_cli_cliente_vta_vendedor_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_vendedor_descripcion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.descripcion');
			if(trim($buscador_cli_cliente_vta_vendedor_descripcion_comparador) == '') $buscador_cli_cliente_vta_vendedor_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.cli_cliente_id');
			if(trim($buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador) == '') $buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaVendedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.vta_vendedor_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.vta_vendedor_id');
			if(trim($buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador) == '') $buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Predeterminado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_predeterminado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.predeterminado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_vendedor_predeterminado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.predeterminado');
			if(trim($buscador_cli_cliente_vta_vendedor_predeterminado_comparador) == '') $buscador_cli_cliente_vta_vendedor_predeterminado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_predeterminado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_predeterminado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_vendedor_codigo' type='text' class='textbox' id='buscador_cli_cliente_vta_vendedor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_vendedor_codigo_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.codigo');
			if(trim($buscador_cli_cliente_vta_vendedor_codigo_comparador) == '') $buscador_cli_cliente_vta_vendedor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_vendedor_observacion' type='text' class='textbox' id='buscador_cli_cliente_vta_vendedor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_vendedor_observacion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.observacion');
			if(trim($buscador_cli_cliente_vta_vendedor_observacion_comparador) == '') $buscador_cli_cliente_vta_vendedor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_vendedor.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_vendedor_estado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_vendedor.estado');
			if(trim($buscador_cli_cliente_vta_vendedor_estado_comparador) == '') $buscador_cli_cliente_vta_vendedor_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_vendedor_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_vendedor_estado_comparador, 'textbox comparador') ?>
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

