<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPresupuestoCancelacion::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_cancelacion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_presupuesto_cancelacion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_cancelacion_descripcion' type='text' class='textbox' id='buscador_vta_presupuesto_cancelacion_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_cancelacion.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_cancelacion_descripcion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.descripcion');
			if(trim($buscador_vta_presupuesto_cancelacion_descripcion_comparador) == '') $buscador_vta_presupuesto_cancelacion_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cancelacion_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id', Gral::getCmbFiltro(VtaPresupuestoInsInsumo::getVtaPresupuestoInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id');
			if(trim($buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador) == '') $buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_cancelacion_codigo' type='text' class='textbox' id='buscador_vta_presupuesto_cancelacion_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_cancelacion.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_cancelacion_codigo_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.codigo');
			if(trim($buscador_vta_presupuesto_cancelacion_codigo_comparador) == '') $buscador_vta_presupuesto_cancelacion_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cancelacion_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_presupuesto_cancelacion_observacion' type='text' class='textbox' id='buscador_vta_presupuesto_cancelacion_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_cancelacion.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_presupuesto_cancelacion_observacion_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.observacion');
			if(trim($buscador_vta_presupuesto_cancelacion_observacion_comparador) == '') $buscador_vta_presupuesto_cancelacion_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cancelacion_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_presupuesto_cancelacion.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_presupuesto_cancelacion_estado_comparador = $criterio->getComparadorDeCampo('vta_presupuesto_cancelacion.estado');
			if(trim($buscador_vta_presupuesto_cancelacion_estado_comparador) == '') $buscador_vta_presupuesto_cancelacion_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_presupuesto_cancelacion_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_presupuesto_cancelacion_estado_comparador, 'textbox comparador') ?>
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

