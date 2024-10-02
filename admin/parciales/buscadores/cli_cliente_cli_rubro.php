<?php
include_once "_autoload.php";
$criterio = new Criterio(CliClienteCliRubro::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_cli_rubro');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente_cli_rubro'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_cli_rubro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_cli_rubro.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_cli_rubro.cli_cliente_id');
			if(trim($buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador) == '') $buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliRubro') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_cli_rubro_cli_rubro_id', Gral::getCmbFiltro(CliRubro::getCliRubrosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_cli_rubro.cli_rubro_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_cli_rubro.cli_rubro_id');
			if(trim($buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador) == '') $buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador, 'textbox comparador') ?>
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

