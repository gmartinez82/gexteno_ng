<?php
include_once "_autoload.php";
$criterio = new Criterio(InsCategoriaInsMarca::SES_CRITERIOS);
$criterio->addTabla('ins_categoria_ins_marca');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_categoria_ins_marca'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsCategoria') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_categoria_ins_marca_ins_categoria_id', Gral::getCmbFiltro(InsCategoria::getInsCategoriasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria_ins_marca.ins_categoria_id'), 'textbox')?>
        	<?php 
			$buscador_ins_categoria_ins_marca_ins_categoria_id_comparador = $criterio->getComparadorDeCampo('ins_categoria_ins_marca.ins_categoria_id');
			if(trim($buscador_ins_categoria_ins_marca_ins_categoria_id_comparador) == '') $buscador_ins_categoria_ins_marca_ins_categoria_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_ins_marca_ins_categoria_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_ins_marca_ins_categoria_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsMarca') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_categoria_ins_marca_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_categoria_ins_marca.ins_marca_id'), 'textbox')?>
        	<?php 
			$buscador_ins_categoria_ins_marca_ins_marca_id_comparador = $criterio->getComparadorDeCampo('ins_categoria_ins_marca.ins_marca_id');
			if(trim($buscador_ins_categoria_ins_marca_ins_marca_id_comparador) == '') $buscador_ins_categoria_ins_marca_ins_marca_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_categoria_ins_marca_ins_marca_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_categoria_ins_marca_ins_marca_id_comparador, 'textbox comparador') ?>
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

