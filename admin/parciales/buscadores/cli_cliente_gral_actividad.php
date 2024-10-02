<?php
include_once "_autoload.php";
$criterio = new Criterio(CliClienteGralActividad::SES_CRITERIOS);
$criterio->addTabla('cli_cliente_gral_actividad');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_cliente_gral_actividad'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_gral_actividad_descripcion' type='text' class='textbox' id='buscador_cli_cliente_gral_actividad_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_gral_actividad_descripcion_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.descripcion');
			if(trim($buscador_cli_cliente_gral_actividad_descripcion_comparador) == '') $buscador_cli_cliente_gral_actividad_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CliCliente') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.cli_cliente_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.cli_cliente_id');
			if(trim($buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador) == '') $buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.gral_actividad_id');
			if(trim($buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador) == '') $buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_gral_actividad_codigo' type='text' class='textbox' id='buscador_cli_cliente_gral_actividad_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_gral_actividad_codigo_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.codigo');
			if(trim($buscador_cli_cliente_gral_actividad_codigo_comparador) == '') $buscador_cli_cliente_gral_actividad_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_cliente_gral_actividad_observacion' type='text' class='textbox' id='buscador_cli_cliente_gral_actividad_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_cliente_gral_actividad_observacion_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.observacion');
			if(trim($buscador_cli_cliente_gral_actividad_observacion_comparador) == '') $buscador_cli_cliente_gral_actividad_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_cliente_gral_actividad.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_cliente_gral_actividad_estado_comparador = $criterio->getComparadorDeCampo('cli_cliente_gral_actividad.estado');
			if(trim($buscador_cli_cliente_gral_actividad_estado_comparador) == '') $buscador_cli_cliente_gral_actividad_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_cliente_gral_actividad_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_cliente_gral_actividad_estado_comparador, 'textbox comparador') ?>
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

