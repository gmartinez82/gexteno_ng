<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoVinculado::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_vinculado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_vinculado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_vinculado_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_vinculado_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.ins_insumo_id');
			if(trim($buscador_ins_insumo_vinculado_ins_insumo_id_comparador) == '') $buscador_ins_insumo_vinculado_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_vinculado_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_vinculado_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumoVinculado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_insumo_vinculado_ins_insumo_vinculado', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_insumo_vinculado_ins_insumo_vinculado_comparador = $criterio->getComparadorDeCampo('ins_insumo_vinculado.ins_insumo_vinculado');
			if(trim($buscador_ins_insumo_vinculado_ins_insumo_vinculado_comparador) == '') $buscador_ins_insumo_vinculado_ins_insumo_vinculado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_vinculado_ins_insumo_vinculado_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_vinculado_ins_insumo_vinculado_comparador, 'textbox comparador') ?>
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

