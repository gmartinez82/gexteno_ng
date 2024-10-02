<?php
include_once "_autoload.php";
$criterio = new Criterio(CliGrupo::SES_CRITERIOS);
$criterio->addTabla('cli_grupo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_grupo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_grupo_descripcion' type='text' class='textbox' id='buscador_cli_grupo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_grupo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_grupo_descripcion_comparador = $criterio->getComparadorDeCampo('cli_grupo.descripcion');
			if(trim($buscador_cli_grupo_descripcion_comparador) == '') $buscador_cli_grupo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_grupo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_grupo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_grupo_codigo' type='text' class='textbox' id='buscador_cli_grupo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_grupo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_grupo_codigo_comparador = $criterio->getComparadorDeCampo('cli_grupo.codigo');
			if(trim($buscador_cli_grupo_codigo_comparador) == '') $buscador_cli_grupo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_grupo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_grupo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_grupo_observacion' type='text' class='textbox' id='buscador_cli_grupo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_grupo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_grupo_observacion_comparador = $criterio->getComparadorDeCampo('cli_grupo.observacion');
			if(trim($buscador_cli_grupo_observacion_comparador) == '') $buscador_cli_grupo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_grupo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_grupo_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_cli_grupo_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_grupo.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_cli_grupo_estado_comparador = $criterio->getComparadorDeCampo('cli_grupo.estado');
			if(trim($buscador_cli_grupo_estado_comparador) == '') $buscador_cli_grupo_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cli_grupo_estado_comparador', Criterio::getComparadoresCmb(), $buscador_cli_grupo_estado_comparador, 'textbox comparador') ?>
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

