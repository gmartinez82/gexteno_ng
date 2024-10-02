<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcTipoEstadoRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_oc_tipo_estado_recepcion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_tipo_estado_recepcion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_tipo_estado_recepcion_descripcion' type='text' class='textbox' id='buscador_pde_oc_tipo_estado_recepcion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.descripcion');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_tipo_estado_recepcion_codigo' type='text' class='textbox' id='buscador_pde_oc_tipo_estado_recepcion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.codigo');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_codigo_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Activo') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_activo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.activo'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_activo_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.activo');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_activo_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_activo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_activo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_activo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Terminal') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_terminal', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.terminal'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_terminal_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.terminal');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_terminal_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_terminal_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_terminal_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_terminal_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_tipo_estado_recepcion_observacion' type='text' class='textbox' id='buscador_pde_oc_tipo_estado_recepcion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.observacion');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_observacion_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_tipo_estado_recepcion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_oc_tipo_estado_recepcion_estado_comparador = $criterio->getComparadorDeCampo('pde_oc_tipo_estado_recepcion.estado');
			if(trim($buscador_pde_oc_tipo_estado_recepcion_estado_comparador) == '') $buscador_pde_oc_tipo_estado_recepcion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_tipo_estado_recepcion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_tipo_estado_recepcion_estado_comparador, 'textbox comparador') ?>
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

