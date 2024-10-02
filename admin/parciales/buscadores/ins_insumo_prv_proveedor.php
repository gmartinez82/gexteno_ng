<?php
include_once "_autoload.php";
$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_prv_proveedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_insumo_prv_proveedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_prv_proveedor.ins_insumo_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_prv_proveedor.ins_insumo_id');
			if(trim($buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador) == '') $buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_prv_proveedor.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('ins_insumo_prv_proveedor.prv_proveedor_id');
			if(trim($buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador) == '') $buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_prv_proveedor_codigo' type='text' class='textbox' id='buscador_ins_insumo_prv_proveedor_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_prv_proveedor.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_prv_proveedor_codigo_comparador = $criterio->getComparadorDeCampo('ins_insumo_prv_proveedor.codigo');
			if(trim($buscador_ins_insumo_prv_proveedor_codigo_comparador) == '') $buscador_ins_insumo_prv_proveedor_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_prv_proveedor_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_insumo_prv_proveedor_observacion' type='text' class='textbox' id='buscador_ins_insumo_prv_proveedor_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_insumo_prv_proveedor.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_insumo_prv_proveedor_observacion_comparador = $criterio->getComparadorDeCampo('ins_insumo_prv_proveedor.observacion');
			if(trim($buscador_ins_insumo_prv_proveedor_observacion_comparador) == '') $buscador_ins_insumo_prv_proveedor_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_insumo_prv_proveedor_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_insumo_prv_proveedor_observacion_comparador, 'textbox comparador') ?>
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

