<?php
include_once "_autoload.php";
$criterio = new Criterio(GralFpFormaPago::SES_CRITERIOS);
$criterio->addTabla('gral_fp_forma_pago');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_fp_forma_pago'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_forma_pago_descripcion' type='text' class='textbox' id='buscador_gral_fp_forma_pago_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_forma_pago_descripcion_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.descripcion');
			if(trim($buscador_gral_fp_forma_pago_descripcion_comparador) == '') $buscador_gral_fp_forma_pago_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_forma_pago_descripcion_corta' type='text' class='textbox' id='buscador_gral_fp_forma_pago_descripcion_corta' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.descripcion_corta')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_forma_pago_descripcion_corta_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.descripcion_corta');
			if(trim($buscador_gral_fp_forma_pago_descripcion_corta_comparador) == '') $buscador_gral_fp_forma_pago_descripcion_corta_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_descripcion_corta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_descripcion_corta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_forma_pago_codigo' type='text' class='textbox' id='buscador_gral_fp_forma_pago_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_forma_pago_codigo_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.codigo');
			if(trim($buscador_gral_fp_forma_pago_codigo_comparador) == '') $buscador_gral_fp_forma_pago_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Contado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_contado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.contado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_contado_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.contado');
			if(trim($buscador_gral_fp_forma_pago_contado_comparador) == '') $buscador_gral_fp_forma_pago_contado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_contado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_contado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Inmediato') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_inmediato', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.inmediato'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_inmediato_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.inmediato');
			if(trim($buscador_gral_fp_forma_pago_inmediato_comparador) == '') $buscador_gral_fp_forma_pago_inmediato_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_inmediato_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_inmediato_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Recibo Automatico') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_recibo_automatico', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.recibo_automatico'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_recibo_automatico_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.recibo_automatico');
			if(trim($buscador_gral_fp_forma_pago_recibo_automatico_comparador) == '') $buscador_gral_fp_forma_pago_recibo_automatico_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_recibo_automatico_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_recibo_automatico_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Compra') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_compra', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.para_compra'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_para_compra_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_compra');
			if(trim($buscador_gral_fp_forma_pago_para_compra_comparador) == '') $buscador_gral_fp_forma_pago_para_compra_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_compra_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_para_compra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Venta') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_venta', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.para_venta'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_para_venta_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_venta');
			if(trim($buscador_gral_fp_forma_pago_para_venta_comparador) == '') $buscador_gral_fp_forma_pago_para_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_venta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_para_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Cobro') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_cobro', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.para_cobro'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_para_cobro_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_cobro');
			if(trim($buscador_gral_fp_forma_pago_para_cobro_comparador) == '') $buscador_gral_fp_forma_pago_para_cobro_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_cobro_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_para_cobro_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Para Pago') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_pago', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.para_pago'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_para_pago_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_pago');
			if(trim($buscador_gral_fp_forma_pago_para_pago_comparador) == '') $buscador_gral_fp_forma_pago_para_pago_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_para_pago_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_para_pago_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuentaCompra') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_compra', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_compra'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.cntb_cuenta_compra');
			if(trim($buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador) == '') $buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuentaVenta') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_venta', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_venta'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.cntb_cuenta_venta');
			if(trim($buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador) == '') $buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_forma_pago_observacion' type='text' class='textbox' id='buscador_gral_fp_forma_pago_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_forma_pago_observacion_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.observacion');
			if(trim($buscador_gral_fp_forma_pago_observacion_comparador) == '') $buscador_gral_fp_forma_pago_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_forma_pago.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_forma_pago_estado_comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.estado');
			if(trim($buscador_gral_fp_forma_pago_estado_comparador) == '') $buscador_gral_fp_forma_pago_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_forma_pago_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_forma_pago_estado_comparador, 'textbox comparador') ?>
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

