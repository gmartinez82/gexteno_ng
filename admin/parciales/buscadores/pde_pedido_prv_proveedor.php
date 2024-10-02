<?php
include_once "_autoload.php";
$criterio = new Criterio(PdePedidoPrvProveedor::SES_CRITERIOS);
$criterio->addTabla('pde_pedido_prv_proveedor');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_pedido_prv_proveedor'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_prv_proveedor_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor.pde_pedido_id');
			if(trim($buscador_pde_pedido_prv_proveedor_pde_pedido_id_comparador) == '') $buscador_pde_pedido_prv_proveedor_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_prv_proveedor_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor.prv_proveedor_id');
			if(trim($buscador_pde_pedido_prv_proveedor_prv_proveedor_id_comparador) == '') $buscador_pde_pedido_prv_proveedor_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_prv_proveedor_id_comparador, 'textbox comparador') ?>
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

