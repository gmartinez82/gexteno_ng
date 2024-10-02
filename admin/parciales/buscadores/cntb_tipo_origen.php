<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbTipoOrigen::SES_CRITERIOS);
$criterio->addTabla('cntb_tipo_origen');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_tipo_origen'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_origen_descripcion' type='text' class='textbox' id='buscador_cntb_tipo_origen_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_origen.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_origen_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.descripcion');
			if(trim($buscador_cntb_tipo_origen_descripcion_comparador) == '') $buscador_cntb_tipo_origen_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_origen_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_origen_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_origen_codigo' type='text' class='textbox' id='buscador_cntb_tipo_origen_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_origen.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_origen_codigo_comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.codigo');
			if(trim($buscador_cntb_tipo_origen_codigo_comparador) == '') $buscador_cntb_tipo_origen_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_origen_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_origen_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_origen_observacion' type='text' class='textbox' id='buscador_cntb_tipo_origen_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_origen.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_origen_observacion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_origen.observacion');
			if(trim($buscador_cntb_tipo_origen_observacion_comparador) == '') $buscador_cntb_tipo_origen_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_origen_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_origen_observacion_comparador, 'textbox comparador') ?>
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

