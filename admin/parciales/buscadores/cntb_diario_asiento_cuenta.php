<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbDiarioAsientoCuenta::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento_cuenta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_diario_asiento_cuenta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_descripcion' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.descripcion');
			if(trim($buscador_cntb_diario_asiento_cuenta_descripcion_comparador) == '') $buscador_cntb_diario_asiento_cuenta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id', Gral::getCmbFiltro(CntbDiarioAsiento::getCntbDiarioAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_diario_asiento_id');
			if(trim($buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador) == '') $buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoSaldo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id', Gral::getCmbFiltro(CntbTipoSaldo::getCntbTipoSaldosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id');
			if(trim($buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador) == '') $buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbCuenta') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id', Gral::getCmbFiltro(CntbCuenta::getCntbCuentasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.cntb_cuenta_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.cntb_cuenta_id');
			if(trim($buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador) == '') $buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Debe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_importe_debe' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_importe_debe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_debe')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_importe_debe_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_debe');
			if(trim($buscador_cntb_diario_asiento_cuenta_importe_debe_comparador) == '') $buscador_cntb_diario_asiento_cuenta_importe_debe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_importe_debe_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_importe_debe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Haber') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_importe_haber' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_importe_haber' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_haber')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_importe_haber_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_haber');
			if(trim($buscador_cntb_diario_asiento_cuenta_importe_haber_comparador) == '') $buscador_cntb_diario_asiento_cuenta_importe_haber_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_importe_haber_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_importe_haber_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe Saldo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_importe_saldo' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_importe_saldo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.importe_saldo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.importe_saldo');
			if(trim($buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador) == '') $buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_codigo' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_codigo_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.codigo');
			if(trim($buscador_cntb_diario_asiento_cuenta_codigo_comparador) == '') $buscador_cntb_diario_asiento_cuenta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Comprobante') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_codigo_comprobante' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_codigo_comprobante' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.codigo_comprobante')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.codigo_comprobante');
			if(trim($buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador) == '') $buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_cuenta_observacion' type='text' class='textbox' id='buscador_cntb_diario_asiento_cuenta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento_cuenta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_cuenta_observacion_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento_cuenta.observacion');
			if(trim($buscador_cntb_diario_asiento_cuenta_observacion_comparador) == '') $buscador_cntb_diario_asiento_cuenta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cuenta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cuenta_observacion_comparador, 'textbox comparador') ?>
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

