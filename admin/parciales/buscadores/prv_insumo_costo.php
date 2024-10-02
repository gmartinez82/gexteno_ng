<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvInsumoCosto::SES_CRITERIOS);
$criterio->addTabla('prv_insumo_costo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_insumo_costo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_costo_prv_insumo_id', Gral::getCmbFiltro(PrvInsumo::getPrvInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo_costo.prv_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_costo_prv_insumo_id_comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.prv_insumo_id');
			if(trim($buscador_prv_insumo_costo_prv_insumo_id_comparador) == '') $buscador_prv_insumo_costo_prv_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_costo_prv_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_costo_prv_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_costo_fecha_actualizacion' type='text' class='textbox' id='buscador_prv_insumo_costo_fecha_actualizacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo_costo.fecha_actualizacion')) ?>' size='15' />
					<input type='button' id='cal_buscador_prv_insumo_costo_fecha_actualizacion' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_prv_insumo_costo_fecha_actualizacion', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_prv_insumo_costo_fecha_actualizacion'
						});
					</script>
		
        	<?php 
			$buscador_prv_insumo_costo_fecha_actualizacion_comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.fecha_actualizacion');
			if(trim($buscador_prv_insumo_costo_fecha_actualizacion_comparador) == '') $buscador_prv_insumo_costo_fecha_actualizacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_costo_fecha_actualizacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_costo_fecha_actualizacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvImportacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_insumo_costo_prv_importacion_id', Gral::getCmbFiltro(PrvImportacion::getPrvImportacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo_costo.prv_importacion_id'), 'textbox')?>
        	<?php 
			$buscador_prv_insumo_costo_prv_importacion_id_comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.prv_importacion_id');
			if(trim($buscador_prv_insumo_costo_prv_importacion_id_comparador) == '') $buscador_prv_insumo_costo_prv_importacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_costo_prv_importacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_costo_prv_importacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_prv_insumo_costo_observacion' type='text' class='textbox' id='buscador_prv_insumo_costo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_insumo_costo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_prv_insumo_costo_observacion_comparador = $criterio->getComparadorDeCampo('prv_insumo_costo.observacion');
			if(trim($buscador_prv_insumo_costo_observacion_comparador) == '') $buscador_prv_insumo_costo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_prv_insumo_costo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_prv_insumo_costo_observacion_comparador, 'textbox comparador') ?>
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

