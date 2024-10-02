<?php
include_once "_autoload.php";
$criterio = new Criterio(InsTipoInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_tipo_insumo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='ins_tipo_insumo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_insumo_descripcion' type='text' class='textbox' id='buscador_ins_tipo_insumo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_insumo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_insumo_descripcion_comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.descripcion');
			if(trim($buscador_ins_tipo_insumo_descripcion_comparador) == '') $buscador_ins_tipo_insumo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_insumo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_insumo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_insumo_codigo' type='text' class='textbox' id='buscador_ins_tipo_insumo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_insumo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_insumo_codigo_comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.codigo');
			if(trim($buscador_ins_tipo_insumo_codigo_comparador) == '') $buscador_ins_tipo_insumo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_insumo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_insumo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuentaCompra') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_tipo_insumo_cntb_cuenta_compra', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_compra'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_tipo_insumo_cntb_cuenta_compra_comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.cntb_cuenta_compra');
			if(trim($buscador_ins_tipo_insumo_cntb_cuenta_compra_comparador) == '') $buscador_ins_tipo_insumo_cntb_cuenta_compra_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_insumo_cntb_cuenta_compra_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_insumo_cntb_cuenta_compra_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuentaVenta') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_ins_tipo_insumo_cntb_cuenta_venta', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_insumo.cntb_cuenta_venta'), 'textbox') ?>
		
        	<?php 
			$buscador_ins_tipo_insumo_cntb_cuenta_venta_comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.cntb_cuenta_venta');
			if(trim($buscador_ins_tipo_insumo_cntb_cuenta_venta_comparador) == '') $buscador_ins_tipo_insumo_cntb_cuenta_venta_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_insumo_cntb_cuenta_venta_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_insumo_cntb_cuenta_venta_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_ins_tipo_insumo_observacion' type='text' class='textbox' id='buscador_ins_tipo_insumo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('ins_tipo_insumo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_ins_tipo_insumo_observacion_comparador = $criterio->getComparadorDeCampo('ins_tipo_insumo.observacion');
			if(trim($buscador_ins_tipo_insumo_observacion_comparador) == '') $buscador_ins_tipo_insumo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_ins_tipo_insumo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_ins_tipo_insumo_observacion_comparador, 'textbox comparador') ?>
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

