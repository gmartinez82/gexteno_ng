<?php
include_once "_autoload.php";
$criterio = new Criterio(FndCajaMovimiento::SES_CRITERIOS);
$criterio->addTabla('fnd_caja_movimiento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='fnd_caja_movimiento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_descripcion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_descripcion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.descripcion');
			if(trim($buscador_fnd_caja_movimiento_descripcion_comparador) == '') $buscador_fnd_caja_movimiento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaOrigen') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_origen', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_origen'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_fnd_caja_origen_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_origen');
			if(trim($buscador_fnd_caja_movimiento_fnd_caja_origen_comparador) == '') $buscador_fnd_caja_movimiento_fnd_caja_origen_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_origen_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_fnd_caja_origen_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaDestino') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_destino', Gral::getCmbFiltro(FndCaja::getFndCajasCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_destino'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_fnd_caja_destino_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_destino');
			if(trim($buscador_fnd_caja_movimiento_fnd_caja_destino_comparador) == '') $buscador_fnd_caja_movimiento_fnd_caja_destino_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_destino_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_fnd_caja_destino_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaTipoMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id', Gral::getCmbFiltro(FndCajaTipoMovimiento::getFndCajaTipoMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_tipo_movimiento_id');
			if(trim($buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id_comparador) == '') $buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_fnd_caja_tipo_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Autorizado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_autorizado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.autorizado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_autorizado_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado');
			if(trim($buscador_fnd_caja_movimiento_autorizado_comparador) == '') $buscador_fnd_caja_movimiento_autorizado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_autorizado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_autorizado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Autorizado el') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_autorizado_el' type='text' class='textbox' id='buscador_fnd_caja_movimiento_autorizado_el' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_el'))) ?>' size='15' />
					<input type='button' id='cal_buscador_fnd_caja_movimiento_autorizado_el' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_fnd_caja_movimiento_autorizado_el', ifFormat: '%d/%m/%Y', button: 'cal_buscador_fnd_caja_movimiento_autorizado_el'
						});
					</script>
		
        	<?php 
			$buscador_fnd_caja_movimiento_autorizado_el_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado_el');
			if(trim($buscador_fnd_caja_movimiento_autorizado_el_comparador) == '') $buscador_fnd_caja_movimiento_autorizado_el_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_autorizado_el_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_autorizado_el_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Autorizado Por') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_autorizado_por', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.autorizado_por'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_autorizado_por_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.autorizado_por');
			if(trim($buscador_fnd_caja_movimiento_autorizado_por_comparador) == '') $buscador_fnd_caja_movimiento_autorizado_por_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_autorizado_por_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_autorizado_por_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('FndCajaMovimientoTipoEstado') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id', Gral::getCmbFiltro(FndCajaMovimientoTipoEstado::getFndCajaMovimientoTipoEstadosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id'), 'textbox')?>
        	<?php 
			$buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id');
			if(trim($buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id_comparador) == '') $buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_fnd_caja_movimiento_tipo_estado_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_codigo' type='text' class='textbox' id='buscador_fnd_caja_movimiento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_codigo_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.codigo');
			if(trim($buscador_fnd_caja_movimiento_codigo_comparador) == '') $buscador_fnd_caja_movimiento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_fnd_caja_movimiento_observacion' type='text' class='textbox' id='buscador_fnd_caja_movimiento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_fnd_caja_movimiento_observacion_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.observacion');
			if(trim($buscador_fnd_caja_movimiento_observacion_comparador) == '') $buscador_fnd_caja_movimiento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('fnd_caja_movimiento.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_fnd_caja_movimiento_estado_comparador = $criterio->getComparadorDeCampo('fnd_caja_movimiento.estado');
			if(trim($buscador_fnd_caja_movimiento_estado_comparador) == '') $buscador_fnd_caja_movimiento_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_fnd_caja_movimiento_estado_comparador', Criterio::getComparadoresCmb(), $buscador_fnd_caja_movimiento_estado_comparador, 'textbox comparador') ?>
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

