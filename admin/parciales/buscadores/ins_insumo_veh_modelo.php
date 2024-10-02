<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_veh_modelo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_veh_modelo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_veh_modelo_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_veh_modelo.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_veh_modelo.ins_insumo_id');
			if(trim($buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador) == '') $buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VehModelo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_veh_modelo_veh_modelo_id', Gral::getCmbFiltro(VehModelo::getVehModelosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_veh_modelo.veh_modelo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_veh_modelo.veh_modelo_id');
			if(trim($buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador) == '') $buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador, 'textbox comparador') ?>
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

