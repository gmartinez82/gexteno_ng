<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaReciboConcepto::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_concepto');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_recibo_concepto'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_concepto_descripcion' type='text' class='textbox' id='buscador_vta_recibo_concepto_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_concepto_descripcion_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.descripcion');
			if(trim($buscador_vta_recibo_concepto_descripcion_comparador) == '') $buscador_vta_recibo_concepto_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_concepto_codigo' type='text' class='textbox' id='buscador_vta_recibo_concepto_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_concepto_codigo_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.codigo');
			if(trim($buscador_vta_recibo_concepto_codigo_comparador) == '') $buscador_vta_recibo_concepto_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Es Retencion') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_concepto_es_retencion', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.es_retencion'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_concepto_es_retencion_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.es_retencion');
			if(trim($buscador_vta_recibo_concepto_es_retencion_comparador) == '') $buscador_vta_recibo_concepto_es_retencion_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_es_retencion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_es_retencion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Es Retencion IIBB') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_recibo_concepto_es_retencion_iibb', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.es_retencion_iibb'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_recibo_concepto_es_retencion_iibb_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.es_retencion_iibb');
			if(trim($buscador_vta_recibo_concepto_es_retencion_iibb_comparador) == '') $buscador_vta_recibo_concepto_es_retencion_iibb_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_es_retencion_iibb_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_es_retencion_iibb_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_recibo_concepto_cntb_cuenta_id', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.cntb_cuenta_id'), 'textbox')?>
        	<?php 
			$buscador_vta_recibo_concepto_cntb_cuenta_id_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.cntb_cuenta_id');
			if(trim($buscador_vta_recibo_concepto_cntb_cuenta_id_comparador) == '') $buscador_vta_recibo_concepto_cntb_cuenta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_cntb_cuenta_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_cntb_cuenta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_recibo_concepto_observacion' type='text' class='textbox' id='buscador_vta_recibo_concepto_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_recibo_concepto.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_recibo_concepto_observacion_comparador = $criterio->getComparadorDeCampo('vta_recibo_concepto.observacion');
			if(trim($buscador_vta_recibo_concepto_observacion_comparador) == '') $buscador_vta_recibo_concepto_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_recibo_concepto_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_recibo_concepto_observacion_comparador, 'textbox comparador') ?>
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

