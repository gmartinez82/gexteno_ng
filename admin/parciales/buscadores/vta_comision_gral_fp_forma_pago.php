<?php
include_once "_autoload.php";
$criterio = new Criterio(VtaComisionGralFpFormaPago::SES_CRITERIOS);
$criterio->addTabla('vta_comision_gral_fp_forma_pago');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='vta_comision_gral_fp_forma_pago'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_gral_fp_forma_pago_descripcion' type='text' class='textbox' id='buscador_vta_comision_gral_fp_forma_pago_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_descripcion_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.descripcion');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_descripcion_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('VtaComision') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_vta_comision_id', Gral::getCmbFiltro(VtaComision::getVtaComisionsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_vta_comision_id_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.vta_comision_id');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_vta_comision_id_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_vta_comision_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_vta_comision_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_vta_comision_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id'), 'textbox')?>
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_gral_fp_forma_pago_importe_afectado' type='text' class='textbox' id='buscador_vta_comision_gral_fp_forma_pago_importe_afectado' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.importe_afectado')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_importe_afectado_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.importe_afectado');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_importe_afectado_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_importe_afectado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_importe_afectado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_importe_afectado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_gral_fp_forma_pago_codigo' type='text' class='textbox' id='buscador_vta_comision_gral_fp_forma_pago_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.codigo')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_codigo_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.codigo');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_codigo_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_vta_comision_gral_fp_forma_pago_observacion' type='text' class='textbox' id='buscador_vta_comision_gral_fp_forma_pago_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.observacion')) ?>' size='22' />
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_observacion_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.observacion');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_observacion_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('vta_comision_gral_fp_forma_pago.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_vta_comision_gral_fp_forma_pago_estado_comparador = $criterio->getComparadorDeCampo('vta_comision_gral_fp_forma_pago.estado');
			if(trim($buscador_vta_comision_gral_fp_forma_pago_estado_comparador) == '') $buscador_vta_comision_gral_fp_forma_pago_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_vta_comision_gral_fp_forma_pago_estado_comparador', Criterio::getComparadoresCmb(), $buscador_vta_comision_gral_fp_forma_pago_estado_comparador, 'textbox comparador') ?>
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

