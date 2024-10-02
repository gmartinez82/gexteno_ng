<?php
include_once "_autoload.php";
$criterio = new Criterio(CliDomicilio::SES_CRITERIOS);
$criterio->addTabla('cli_domicilio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_domicilio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_domicilio_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_domicilio.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_domicilio_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_domicilio.cli_cliente_id');
			if(trim($buscador_cli_domicilio_cli_cliente_id_comparador) == '') $buscador_cli_domicilio_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_domicilio_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_domicilio_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Domicilio') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_domicilio_descripcion' type='text' class='textbox' id='buscador_cli_domicilio_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_domicilio.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_domicilio_descripcion_comparador = $criterio->getComparadorDeCampo('cli_domicilio.descripcion');
			if(trim($buscador_cli_domicilio_descripcion_comparador) == '') $buscador_cli_domicilio_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_domicilio_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_domicilio_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_domicilio_codigo' type='text' class='textbox' id='buscador_cli_domicilio_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_domicilio.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_domicilio_codigo_comparador = $criterio->getComparadorDeCampo('cli_domicilio.codigo');
			if(trim($buscador_cli_domicilio_codigo_comparador) == '') $buscador_cli_domicilio_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_domicilio_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_domicilio_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_domicilio_observacion' type='text' class='textbox' id='buscador_cli_domicilio_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_domicilio.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_domicilio_observacion_comparador = $criterio->getComparadorDeCampo('cli_domicilio.observacion');
			if(trim($buscador_cli_domicilio_observacion_comparador) == '') $buscador_cli_domicilio_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_domicilio_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_domicilio_observacion_comparador, 'textbox comparador') ?>
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

