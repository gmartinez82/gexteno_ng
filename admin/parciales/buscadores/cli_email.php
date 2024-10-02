<?php
include_once "_autoload.php";
$criterio = new Criterio(CliEmail::SES_CRITERIOS);
$criterio->addTabla('cli_email');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_email'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_email_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_email.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_email_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_email.cli_cliente_id');
			if(trim($buscador_cli_email_cli_cliente_id_comparador) == '') $buscador_cli_email_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_email_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_email_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_email_descripcion' type='text' class='textbox' id='buscador_cli_email_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_email.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_email_descripcion_comparador = $criterio->getComparadorDeCampo('cli_email.descripcion');
			if(trim($buscador_cli_email_descripcion_comparador) == '') $buscador_cli_email_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_email_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_email_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_email_codigo' type='text' class='textbox' id='buscador_cli_email_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_email.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_email_codigo_comparador = $criterio->getComparadorDeCampo('cli_email.codigo');
			if(trim($buscador_cli_email_codigo_comparador) == '') $buscador_cli_email_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_email_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_email_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_email_observacion' type='text' class='textbox' id='buscador_cli_email_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_email.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_email_observacion_comparador = $criterio->getComparadorDeCampo('cli_email.observacion');
			if(trim($buscador_cli_email_observacion_comparador) == '') $buscador_cli_email_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_email_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_email_observacion_comparador, 'textbox comparador') ?>
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

