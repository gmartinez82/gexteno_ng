<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPoliticaDescuentoInsCategoria::SES_CRITERIOS);
$criterio->addTabla('vta_politica_descuento_ins_categoria');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_politica_descuento_ins_categoria'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.vta_politica_descuento_id');
			if(trim($buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id_comparador) == '') $buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_ins_categoria_vta_politica_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_categoria_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_vta_politica_descuento_ins_categoria_ins_categoria_id_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_categoria.ins_categoria_id');
			if(trim($buscador_vta_politica_descuento_ins_categoria_ins_categoria_id_comparador) == '') $buscador_vta_politica_descuento_ins_categoria_ins_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_categoria_ins_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_ins_categoria_ins_categoria_id_comparador, 'textbox comparador') ?>
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

