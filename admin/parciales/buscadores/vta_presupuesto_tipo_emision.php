<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuestoTipoEmision::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_tipo_emision');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto_tipo_emision'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_tipo_emision_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_tipo_emision_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_tipo_emision_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.descripcion');
			if(trim($buscador_vta_presupuesto_tipo_emision_descripcion_comparador) == '') $buscador_vta_presupuesto_tipo_emision_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_tipo_emision_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_tipo_emision_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_tipo_emision_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_tipo_emision_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_tipo_emision_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.codigo');
			if(trim($buscador_vta_presupuesto_tipo_emision_codigo_comparador) == '') $buscador_vta_presupuesto_tipo_emision_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_tipo_emision_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_tipo_emision_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_tipo_emision_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_tipo_emision_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_tipo_emision_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.observacion');
			if(trim($buscador_vta_presupuesto_tipo_emision_observacion_comparador) == '') $buscador_vta_presupuesto_tipo_emision_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_tipo_emision_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_tipo_emision_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_tipo_emision_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_tipo_emision.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_tipo_emision_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_tipo_emision.estado');
			if(trim($buscador_vta_presupuesto_tipo_emision_estado_comparador) == '') $buscador_vta_presupuesto_tipo_emision_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_tipo_emision_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_tipo_emision_estado_comparador, 'textbox comparador') ?>
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

