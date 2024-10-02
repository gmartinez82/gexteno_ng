<?php
include_once "_autoload.php";
$criterio = new Criterio(PdeCentroPedidoEmail::SES_CRITERIOS);
$criterio->addTabla('pde_centro_pedido_email');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pde_centro_pedido_email'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_centro_pedido_email_descripcion' type='text' class='textbox' id='buscador_pde_centro_pedido_email_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_email.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pde_centro_pedido_email_descripcion_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.descripcion');
			if(trim($buscador_pde_centro_pedido_email_descripcion_comparador) == '') $buscador_pde_centro_pedido_email_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_email_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_email_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdeCentroPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pde_centro_pedido_email_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id');
			if(trim($buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador) == '') $buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_centro_pedido_email_codigo' type='text' class='textbox' id='buscador_pde_centro_pedido_email_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_email.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pde_centro_pedido_email_codigo_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.codigo');
			if(trim($buscador_pde_centro_pedido_email_codigo_comparador) == '') $buscador_pde_centro_pedido_email_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_email_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_email_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pde_centro_pedido_email_observacion' type='text' class='textbox' id='buscador_pde_centro_pedido_email_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pde_centro_pedido_email.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pde_centro_pedido_email_observacion_comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.observacion');
			if(trim($buscador_pde_centro_pedido_email_observacion_comparador) == '') $buscador_pde_centro_pedido_email_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pde_centro_pedido_email_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pde_centro_pedido_email_observacion_comparador, 'textbox comparador') ?>
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

