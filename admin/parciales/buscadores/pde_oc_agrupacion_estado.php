<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeOcAgrupacionEstado::SES_CRITERIOS);
$criterio->addTabla('pde_oc_agrupacion_estado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_oc_agrupacion_estado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcAgrupacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id', Gral::getCmbFiltro(PdeOcAgrupacion::getPdeOcAgrupacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_id');
			if(trim($buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id_comparador) == '') $buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id', Gral::getCmbFiltro(PdeOcAgrupacionTipoEstado::getPdeOcAgrupacionTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id');
			if(trim($buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id_comparador) == '') $buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_estado_pde_oc_agrupacion_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_oc_agrupacion_estado_observacion' type='text' class='textbox' id='buscador_pde_oc_agrupacion_estado_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_oc_agrupacion_estado.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_oc_agrupacion_estado_observacion_comparador = $criterio->getComparadorDeCampo('pde_oc_agrupacion_estado.observacion');
			if(trim($buscador_pde_oc_agrupacion_estado_observacion_comparador) == '') $buscador_pde_oc_agrupacion_estado_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_oc_agrupacion_estado_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_oc_agrupacion_estado_observacion_comparador, 'textbox comparador') ?>
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

