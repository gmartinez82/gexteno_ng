<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeCentroPedidoPdeCentroRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_centro_pedido_pde_centro_recepcion');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_centro_pedido_pde_centro_recepcion'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id');
			if(trim($buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id_comparador) == '') $buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id'), 'textbox')?>
        	<?php 
			$buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id');
			if(trim($buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id_comparador) == '') $buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_pde_centro_recepcion_pde_centro_recepcion_id_comparador, 'textbox comparador') ?>
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

