<?php
include_once "_autoload.php";
$criterio = new Criterio(CliClienteVtaPreventista::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_vta_preventista');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente_vta_preventista'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_preventista_descripcion' type='text' class='textbox' id='buscador_cli_cliente_vta_preventista_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_preventista_descripcion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.descripcion');
			if(trim($buscador_cli_cliente_vta_preventista_descripcion_comparador) == '') $buscador_cli_cliente_vta_preventista_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.cli_cliente_id');
			if(trim($buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador) == '') $buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.vta_preventista_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.vta_preventista_id');
			if(trim($buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador) == '') $buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Predeterminado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_predeterminado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.predeterminado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_preventista_predeterminado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.predeterminado');
			if(trim($buscador_cli_cliente_vta_preventista_predeterminado_comparador) == '') $buscador_cli_cliente_vta_preventista_predeterminado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_predeterminado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_predeterminado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_preventista_codigo' type='text' class='textbox' id='buscador_cli_cliente_vta_preventista_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_preventista_codigo_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.codigo');
			if(trim($buscador_cli_cliente_vta_preventista_codigo_comparador) == '') $buscador_cli_cliente_vta_preventista_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_vta_preventista_observacion' type='text' class='textbox' id='buscador_cli_cliente_vta_preventista_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_vta_preventista_observacion_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.observacion');
			if(trim($buscador_cli_cliente_vta_preventista_observacion_comparador) == '') $buscador_cli_cliente_vta_preventista_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_vta_preventista.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_vta_preventista_estado_comparador = $criterio->getComparadorDeCampo('cli_cliente_vta_preventista.estado');
			if(trim($buscador_cli_cliente_vta_preventista_estado_comparador) == '') $buscador_cli_cliente_vta_preventista_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_vta_preventista_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_vta_preventista_estado_comparador, 'textbox comparador') ?>
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

