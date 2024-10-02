<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbTipoCuenta::SES_CRITERIOS);
$criterio->addTabla('cntb_tipo_cuenta');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_tipo_cuenta'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoClasificacion') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id', Gral::getCmbFiltro(CntbTipoClasificacion::getCntbTipoClasificacionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_cuenta.cntb_tipo_clasificacion_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador = $criterio->getComparadorDeCampo('cntb_tipo_cuenta.cntb_tipo_clasificacion_id');
			if(trim($buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador) == '') $buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoSaldo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id', Gral::getCmbFiltro(CntbTipoSaldo::getCntbTipoSaldosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_cuenta.cntb_tipo_saldo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador = $criterio->getComparadorDeCampo('cntb_tipo_cuenta.cntb_tipo_saldo_id');
			if(trim($buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador) == '') $buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_cuenta_descripcion' type='text' class='textbox' id='buscador_cntb_tipo_cuenta_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_cuenta.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_cuenta_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_cuenta.descripcion');
			if(trim($buscador_cntb_tipo_cuenta_descripcion_comparador) == '') $buscador_cntb_tipo_cuenta_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_cuenta_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_cuenta_codigo' type='text' class='textbox' id='buscador_cntb_tipo_cuenta_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_cuenta.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_cuenta_codigo_comparador = $criterio->getComparadorDeCampo('cntb_tipo_cuenta.codigo');
			if(trim($buscador_cntb_tipo_cuenta_codigo_comparador) == '') $buscador_cntb_tipo_cuenta_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_cuenta_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_tipo_cuenta_observacion' type='text' class='textbox' id='buscador_cntb_tipo_cuenta_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_tipo_cuenta.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_tipo_cuenta_observacion_comparador = $criterio->getComparadorDeCampo('cntb_tipo_cuenta.observacion');
			if(trim($buscador_cntb_tipo_cuenta_observacion_comparador) == '') $buscador_cntb_tipo_cuenta_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_tipo_cuenta_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_tipo_cuenta_observacion_comparador, 'textbox comparador') ?>
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

