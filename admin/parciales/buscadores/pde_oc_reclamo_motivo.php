<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcReclamoMotivo::SES_CRITERIOS);
$criterio->addTabla('pde_oc_reclamo_motivo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_reclamo_motivo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_motivo_descripcion' type='text' class='textbox' id='buscador_pde_oc_reclamo_motivo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo_motivo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_motivo_descripcion_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.descripcion');
			if(trim($buscador_pde_oc_reclamo_motivo_descripcion_comparador) == '') $buscador_pde_oc_reclamo_motivo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_motivo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_motivo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_motivo_codigo' type='text' class='textbox' id='buscador_pde_oc_reclamo_motivo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo_motivo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_motivo_codigo_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.codigo');
			if(trim($buscador_pde_oc_reclamo_motivo_codigo_comparador) == '') $buscador_pde_oc_reclamo_motivo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_motivo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_motivo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Puntaje') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_motivo_puntaje' type='text' class='textbox' id='buscador_pde_oc_reclamo_motivo_puntaje' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo_motivo.puntaje')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_motivo_puntaje_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.puntaje');
			if(trim($buscador_pde_oc_reclamo_motivo_puntaje_comparador) == '') $buscador_pde_oc_reclamo_motivo_puntaje_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_motivo_puntaje_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_motivo_puntaje_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_reclamo_motivo_observacion' type='text' class='textbox' id='buscador_pde_oc_reclamo_motivo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_reclamo_motivo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_reclamo_motivo_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.observacion');
			if(trim($buscador_pde_oc_reclamo_motivo_observacion_comparador) == '') $buscador_pde_oc_reclamo_motivo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_reclamo_motivo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_reclamo_motivo_observacion_comparador, 'textbox comparador') ?>
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

