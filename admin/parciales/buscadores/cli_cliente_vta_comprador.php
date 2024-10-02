<?php
include_once "_autoload.php";
$criterio = new Criterio(CliClienteVtaComprador::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_vta_comprador');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente_vta_comprador'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_comprador_descripcion' type='text' class='textbox' id='buscador_cli_cliente_vta_comprador_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_comprador_descripcion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.descripcion');
			if(trim($buscador_cli_cliente_vta_comprador_descripcion_comparador) == '') $buscador_cli_cliente_vta_comprador_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.cli_cliente_id');
			if(trim($buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador) == '') $buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComprador') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.vta_comprador_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.vta_comprador_id');
			if(trim($buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador) == '') $buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Predeterminado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_predeterminado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.predeterminado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_comprador_predeterminado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.predeterminado');
			if(trim($buscador_cli_cliente_vta_comprador_predeterminado_comparador) == '') $buscador_cli_cliente_vta_comprador_predeterminado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_predeterminado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_predeterminado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_comprador_codigo' type='text' class='textbox' id='buscador_cli_cliente_vta_comprador_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_comprador_codigo_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.codigo');
			if(trim($buscador_cli_cliente_vta_comprador_codigo_comparador) == '') $buscador_cli_cliente_vta_comprador_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_comprador_observacion' type='text' class='textbox' id='buscador_cli_cliente_vta_comprador_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_comprador_observacion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.observacion');
			if(trim($buscador_cli_cliente_vta_comprador_observacion_comparador) == '') $buscador_cli_cliente_vta_comprador_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_comprador.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_comprador_estado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_comprador.estado');
			if(trim($buscador_cli_cliente_vta_comprador_estado_comparador) == '') $buscador_cli_cliente_vta_comprador_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_comprador_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_comprador_estado_comparador, 'textbox comparador') ?>
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

