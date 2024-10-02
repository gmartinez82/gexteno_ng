<?php
include_once "_autoload.php";
$criterio = new Criterio(PdiComentario::SES_CRITERIOS);
$criterio->addTabla('pdi_comentario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='pdi_comentario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_comentario_descripcion' type='text' class='textbox' id='buscador_pdi_comentario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_comentario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_comentario_descripcion_comparador = $criterio->getComparadorDeCampo('pdi_comentario.descripcion');
			if(trim($buscador_pdi_comentario_descripcion_comparador) == '') $buscador_pdi_comentario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_comentario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_comentario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PdiPedido') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_pdi_comentario_pdi_pedido_id', Gral::getCmbFiltro(PdiPedido::getPdiPedidosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_comentario.pdi_pedido_id'), 'textbox')?>
        	<?php 
			$buscador_pdi_comentario_pdi_pedido_id_comparador = $criterio->getComparadorDeCampo('pdi_comentario.pdi_pedido_id');
			if(trim($buscador_pdi_comentario_pdi_pedido_id_comparador) == '') $buscador_pdi_comentario_pdi_pedido_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_pdi_comentario_pdi_pedido_id_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_comentario_pdi_pedido_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_comentario_codigo' type='text' class='textbox' id='buscador_pdi_comentario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_comentario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_pdi_comentario_codigo_comparador = $criterio->getComparadorDeCampo('pdi_comentario.codigo');
			if(trim($buscador_pdi_comentario_codigo_comparador) == '') $buscador_pdi_comentario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_comentario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_comentario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_pdi_comentario_observacion' type='text' class='textbox' id='buscador_pdi_comentario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('pdi_comentario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_pdi_comentario_observacion_comparador = $criterio->getComparadorDeCampo('pdi_comentario.observacion');
			if(trim($buscador_pdi_comentario_observacion_comparador) == '') $buscador_pdi_comentario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_pdi_comentario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_pdi_comentario_observacion_comparador, 'textbox comparador') ?>
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

