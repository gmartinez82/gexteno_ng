<?php
include_once "_autoload.php";
$criterio = new Criterio(GralFpCuota::SES_CRITERIOS);
$criterio->addTabla('gral_fp_cuota');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='gral_fp_cuota'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_descripcion' type='text' class='textbox' id='buscador_gral_fp_cuota_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_descripcion_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.descripcion');
			if(trim($buscador_gral_fp_cuota_descripcion_comparador) == '') $buscador_gral_fp_cuota_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
		  <div class='dato' id='dato_buscador_gral_fp_cuota_gral_fp_forma_pago_id'>
			  <?php
				$cmb_gral_fp_forma_pago_id = $criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id');
					
				$c = new Criterio(GralFpFormaPago::SES_CRITERIOS);
				$c->add('x', $x, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('gral_fp_forma_pago');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_fp_cuota_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmbF(null, $c),'Seleccione GralFpFormaPago'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_fp_cuota_x" elemento_id="buscador_gral_fp_forma_pago_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador = $criterio->getComparadorDeCampo('gral_fp_medio_pago.gral_fp_forma_pago_id');
			if(trim($buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador) == '') $buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralFpMedioPago') ?></div>
		  <div class='dato' id='dato_buscador_gral_fp_cuota_gral_fp_medio_pago_id'>
			  <?php
				$cmb_gral_fp_medio_pago_id = $criterio->getValorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id');
					
				$c = new Criterio(GralFpMedioPago::SES_CRITERIOS);
				$c->add('gral_fp_forma_pago_id', $cmb_gral_fp_forma_pago_id, Criterio::IGUAL);
				$c->addOrden('descripcion', 'asc');
				$c->addTabla('gral_fp_medio_pago');
				$c->setCriterios();
				?>
				<?php Html::html_dib_select(1, 'buscador_gral_fp_cuota_gral_fp_medio_pago_id', Gral::getCmbFiltro(GralFpMedioPago::getGralFpMedioPagosCmbF(null, $c),'Seleccione GralFpMedioPago'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id'), 'textbox  combo_padre combo_hijo', '', 'combo_padre="buscador_gral_fp_cuota_gral_fp_forma_pago_id" elemento_id="buscador_gral_fp_medio_pago_id" tipo="buscador"') ?>
		  </div>

        	<?php 
			$buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.gral_fp_medio_pago_id');
			if(trim($buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador) == '') $buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador, 'textbox comparador') ?>
			
		</div>
			
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Cantidad') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_cantidad' type='text' class='textbox' id='buscador_gral_fp_cuota_cantidad' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.cantidad')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_cantidad_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.cantidad');
			if(trim($buscador_gral_fp_cuota_cantidad_comparador) == '') $buscador_gral_fp_cuota_cantidad_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_cantidad_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_cantidad_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Dias Vencimiento') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_dias_vencimiento' type='text' class='textbox' id='buscador_gral_fp_cuota_dias_vencimiento' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.dias_vencimiento')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_dias_vencimiento_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.dias_vencimiento');
			if(trim($buscador_gral_fp_cuota_dias_vencimiento_comparador) == '') $buscador_gral_fp_cuota_dias_vencimiento_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_dias_vencimiento_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_dias_vencimiento_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Recargo %') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_recargo' type='text' class='textbox' id='buscador_gral_fp_cuota_recargo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.recargo')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_recargo_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.recargo');
			if(trim($buscador_gral_fp_cuota_recargo_comparador) == '') $buscador_gral_fp_cuota_recargo_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_recargo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_recargo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_codigo' type='text' class='textbox' id='buscador_gral_fp_cuota_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.codigo')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_codigo_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.codigo');
			if(trim($buscador_gral_fp_cuota_codigo_comparador) == '') $buscador_gral_fp_cuota_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_gral_fp_cuota_observacion' type='text' class='textbox' id='buscador_gral_fp_cuota_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.observacion')) ?>' size='22' />
        	<?php 
			$buscador_gral_fp_cuota_observacion_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.observacion');
			if(trim($buscador_gral_fp_cuota_observacion_comparador) == '') $buscador_gral_fp_cuota_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_gral_fp_cuota_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('gral_fp_cuota.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_gral_fp_cuota_estado_comparador = $criterio->getComparadorDeCampo('gral_fp_cuota.estado');
			if(trim($buscador_gral_fp_cuota_estado_comparador) == '') $buscador_gral_fp_cuota_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_gral_fp_cuota_estado_comparador', Criterio::getComparadoresCmb(), $buscador_gral_fp_cuota_estado_comparador, 'textbox comparador') ?>
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

