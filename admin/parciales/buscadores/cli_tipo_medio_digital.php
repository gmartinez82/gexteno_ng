<?php
include_once "_autoload.php";
$criterio = new Criterio(CliTipoMedioDigital::SES_CRITERIOS);
$criterio->addTabla('cli_tipo_medio_digital');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_tipo_medio_digital'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_tipo_medio_digital_descripcion' type='text' class='textbox' id='buscador_cli_tipo_medio_digital_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_tipo_medio_digital.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_tipo_medio_digital_descripcion_comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.descripcion');
			if(trim($buscador_cli_tipo_medio_digital_descripcion_comparador) == '') $buscador_cli_tipo_medio_digital_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_tipo_medio_digital_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_tipo_medio_digital_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_tipo_medio_digital_codigo' type='text' class='textbox' id='buscador_cli_tipo_medio_digital_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_tipo_medio_digital.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_tipo_medio_digital_codigo_comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.codigo');
			if(trim($buscador_cli_tipo_medio_digital_codigo_comparador) == '') $buscador_cli_tipo_medio_digital_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_tipo_medio_digital_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_tipo_medio_digital_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_tipo_medio_digital_observacion' type='text' class='textbox' id='buscador_cli_tipo_medio_digital_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_tipo_medio_digital.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_tipo_medio_digital_observacion_comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.observacion');
			if(trim($buscador_cli_tipo_medio_digital_observacion_comparador) == '') $buscador_cli_tipo_medio_digital_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_tipo_medio_digital_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_tipo_medio_digital_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_tipo_medio_digital_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_tipo_medio_digital.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_tipo_medio_digital_estado_comparador = $criterio->getComparadorDeCampo('cli_tipo_medio_digital.estado');
			if(trim($buscador_cli_tipo_medio_digital_estado_comparador) == '') $buscador_cli_tipo_medio_digital_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_tipo_medio_digital_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_tipo_medio_digital_estado_comparador, 'textbox comparador') ?>
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

