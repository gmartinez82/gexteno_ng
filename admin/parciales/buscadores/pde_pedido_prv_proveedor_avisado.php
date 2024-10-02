<?php
include_once "_autoload.php";
$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
$criterio->addTabla('pde_pedido_prv_proveedor_avisado');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_pedido_prv_proveedor_avisado'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdePedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id', Gral::getCmbFiltro(PdePedido::getPdePedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id');
			if(trim($buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador) == '') $buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id');
			if(trim($buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador) == '') $buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Destinatario') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_prv_proveedor_avisado_enviado_a' type='text' class='textbox' id='buscador_pde_pedido_prv_proveedor_avisado_enviado_a' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.enviado_a')) ?>' size='22' />
        	<?php 
			$buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.enviado_a');
			if(trim($buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador) == '') $buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Leido') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido'), 'textbox') ?>
		
        	<?php 
			$buscador_pde_pedido_prv_proveedor_avisado_leido_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.leido');
			if(trim($buscador_pde_pedido_prv_proveedor_avisado_leido_comparador) == '') $buscador_pde_pedido_prv_proveedor_avisado_leido_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_avisado_leido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Leido El') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_pedido_prv_proveedor_avisado_leido_el' type='text' class='textbox' id='buscador_pde_pedido_prv_proveedor_avisado_leido_el' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido_el')) ?>' size='15' />
					<input type='button' id='cal_buscador_pde_pedido_prv_proveedor_avisado_leido_el' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_pde_pedido_prv_proveedor_avisado_leido_el', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_buscador_pde_pedido_prv_proveedor_avisado_leido_el'
						});
					</script>
		
        	<?php 
			$buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.leido_el');
			if(trim($buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador) == '') $buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador', Criterio::getComparadoresCmb(), $buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador, 'textbox comparador') ?>
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

