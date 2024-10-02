<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuestoVehCoche::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_veh_coche');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto_veh_coche'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_veh_coche_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_veh_coche_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_veh_coche_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.descripcion');
			if(trim($buscador_vta_presupuesto_veh_coche_descripcion_comparador) == '') $buscador_vta_presupuesto_veh_coche_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_vta_presupuesto_id', Gral::getCmbFiltro(VtaPresupuesto::getVtaPresupuestosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.vta_presupuesto_id');
			if(trim($buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador) == '') $buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VehCoche') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_veh_coche_id', Gral::getCmbFiltro(VehCoche::getVehCochesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.veh_coche_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.veh_coche_id');
			if(trim($buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador) == '') $buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_veh_coche_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_veh_coche_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_veh_coche_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.codigo');
			if(trim($buscador_vta_presupuesto_veh_coche_codigo_comparador) == '') $buscador_vta_presupuesto_veh_coche_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_veh_coche_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_veh_coche_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_veh_coche_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.observacion');
			if(trim($buscador_vta_presupuesto_veh_coche_observacion_comparador) == '') $buscador_vta_presupuesto_veh_coche_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_veh_coche.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_veh_coche_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_veh_coche.estado');
			if(trim($buscador_vta_presupuesto_veh_coche_estado_comparador) == '') $buscador_vta_presupuesto_veh_coche_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_veh_coche_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_veh_coche_estado_comparador, 'textbox comparador') ?>
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

