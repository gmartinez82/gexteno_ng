<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaPoliticaDescuentoInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTabla('vta_politica_descuento_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_politica_descuento_ins_tipo_lista_precio'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_ins_tipo_lista_precio.vta_politica_descuento_id'), 'textbox')?>
        	<?php 
			$buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_tipo_lista_precio.vta_politica_descuento_id');
			if(trim($buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id_comparador) == '') $buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_ins_tipo_lista_precio_vta_politica_descuento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_politica_descuento_ins_tipo_lista_precio.ins_tipo_lista_precio_id'), 'textbox')?>
        	<?php 
			$buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador = $criterio->getComparadorDeCampo('vta_politica_descuento_ins_tipo_lista_precio.ins_tipo_lista_precio_id');
			if(trim($buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador) == '') $buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_politica_descuento_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador, 'textbox comparador') ?>
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

