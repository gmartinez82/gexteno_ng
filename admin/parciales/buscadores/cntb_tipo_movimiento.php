<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbTipoMovimiento::SES_CRITERIOS);
$criterio->addTabla('cntb_tipo_movimiento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_tipo_movimiento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_movimiento_descripcion' type='text' class='textbox' id='buscador_cntb_tipo_movimiento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_movimiento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_movimiento_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_movimiento.descripcion');
			if(trim($buscador_cntb_tipo_movimiento_descripcion_comparador) == '') $buscador_cntb_tipo_movimiento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_movimiento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_movimiento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_movimiento_codigo' type='text' class='textbox' id='buscador_cntb_tipo_movimiento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_movimiento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_movimiento_codigo_comparador = $criterio->getComparadorDeCampo('cntb_tipo_movimiento.codigo');
			if(trim($buscador_cntb_tipo_movimiento_codigo_comparador) == '') $buscador_cntb_tipo_movimiento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_movimiento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_movimiento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_movimiento_observacion' type='text' class='textbox' id='buscador_cntb_tipo_movimiento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_movimiento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_movimiento_observacion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_movimiento.observacion');
			if(trim($buscador_cntb_tipo_movimiento_observacion_comparador) == '') $buscador_cntb_tipo_movimiento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_movimiento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_movimiento_observacion_comparador, 'textbox comparador') ?>
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

