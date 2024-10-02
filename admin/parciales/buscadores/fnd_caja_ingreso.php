<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajaIngreso::SES_CRITERIOS);
$criterio->addTabla('fnd_caja_ingreso');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_caja_ingreso'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_ingreso_descripcion' type='text' class='textbox' id='buscador_fnd_caja_ingreso_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_ingreso_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.descripcion');
			if(trim($buscador_fnd_caja_ingreso_descripcion_comparador) == '') $buscador_fnd_caja_ingreso_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCaja') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_fnd_caja_id', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_ingreso_fnd_caja_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.fnd_caja_id');
			if(trim($buscador_fnd_caja_ingreso_fnd_caja_id_comparador) == '') $buscador_fnd_caja_ingreso_fnd_caja_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_fnd_caja_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_fnd_caja_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaTipoIngreso') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id', Gral::getCmbFiltro(FndCajaTipoIngreso::getFndCajaTipoIngresosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.fnd_caja_tipo_ingreso_id');
			if(trim($buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id_comparador) == '') $buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_fnd_caja_tipo_ingreso_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cod Ref') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_ingreso_codigo_referencia' type='text' class='textbox' id='buscador_fnd_caja_ingreso_codigo_referencia' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.codigo_referencia')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_ingreso_codigo_referencia_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.codigo_referencia');
			if(trim($buscador_fnd_caja_ingreso_codigo_referencia_comparador) == '') $buscador_fnd_caja_ingreso_codigo_referencia_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_codigo_referencia_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_codigo_referencia_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Importe') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_ingreso_importe' type='text' class='textbox' id='buscador_fnd_caja_ingreso_importe' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.importe')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_ingreso_importe_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.importe');
			if(trim($buscador_fnd_caja_ingreso_importe_comparador) == '') $buscador_fnd_caja_ingreso_importe_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_importe_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_importe_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_ingreso_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.gral_fp_forma_pago_id');
			if(trim($buscador_fnd_caja_ingreso_gral_fp_forma_pago_id_comparador) == '') $buscador_fnd_caja_ingreso_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_ingreso_codigo' type='text' class='textbox' id='buscador_fnd_caja_ingreso_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_ingreso_codigo_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.codigo');
			if(trim($buscador_fnd_caja_ingreso_codigo_comparador) == '') $buscador_fnd_caja_ingreso_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_ingreso_observacion' type='text' class='textbox' id='buscador_fnd_caja_ingreso_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_ingreso_observacion_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.observacion');
			if(trim($buscador_fnd_caja_ingreso_observacion_comparador) == '') $buscador_fnd_caja_ingreso_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_ingreso.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_ingreso_estado_comparador = $criterio->getComparadorDeCampo('fnd_caja_ingreso.estado');
			if(trim($buscador_fnd_caja_ingreso_estado_comparador) == '') $buscador_fnd_caja_ingreso_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_ingreso_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_ingreso_estado_comparador, 'textbox comparador') ?>
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

