<?php
include_once "_autoload.php";
$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->addTabla('cntb_diario_asiento');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cntb_diario_asiento'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_descripcion' type='text' class='textbox' id='buscador_cntb_diario_asiento_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_descripcion_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.descripcion');
			if(trim($buscador_cntb_diario_asiento_descripcion_comparador) == '') $buscador_cntb_diario_asiento_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbEjercicio') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_ejercicio_id', Gral::getCmbFiltro(CntbEjercicio::getCntbEjerciciosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.cntb_ejercicio_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_ejercicio_id');
			if(trim($buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador) == '') $buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbPeriodo') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_periodo_id', Gral::getCmbFiltro(CntbPeriodo::getCntbPeriodosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.cntb_periodo_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cntb_periodo_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_periodo_id');
			if(trim($buscador_cntb_diario_asiento_cntb_periodo_id_comparador) == '') $buscador_cntb_diario_asiento_cntb_periodo_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_periodo_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cntb_periodo_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoAsiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_asiento_id', Gral::getCmbFiltro(CntbTipoAsiento::getCntbTipoAsientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_asiento_id');
			if(trim($buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador) == '') $buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoOrigen') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_origen_id', Gral::getCmbFiltro(CntbTipoOrigen::getCntbTipoOrigensCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_origen_id');
			if(trim($buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador) == '') $buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('CntbTipoMovimiento') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_movimiento_id', Gral::getCmbFiltro(CntbTipoMovimiento::getCntbTipoMovimientosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.cntb_tipo_movimiento_id');
			if(trim($buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador) == '') $buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('GralActividad') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_cntb_diario_asiento_gral_actividad_id', Gral::getCmbFiltro(GralActividad::getGralActividadsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.gral_actividad_id'), 'textbox')?>
        	<?php 
			$buscador_cntb_diario_asiento_gral_actividad_id_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.gral_actividad_id');
			if(trim($buscador_cntb_diario_asiento_gral_actividad_id_comparador) == '') $buscador_cntb_diario_asiento_gral_actividad_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_gral_actividad_id_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_gral_actividad_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Fecha') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_fecha' type='text' class='textbox' id='buscador_cntb_diario_asiento_fecha' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : Gral::getFechaHoraToWeb($criterio->getValorDeCampo('cntb_diario_asiento.fecha'))) ?>' size='15' />
					<input type='button' id='cal_buscador_cntb_diario_asiento_fecha' value='...' />

					<script type='text/javascript'>
						Calendar.setup({
							inputField: 'buscador_cntb_diario_asiento_fecha', ifFormat: '%d/%m/%Y', button: 'cal_buscador_cntb_diario_asiento_fecha'
						});
					</script>
		
        	<?php 
			$buscador_cntb_diario_asiento_fecha_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.fecha');
			if(trim($buscador_cntb_diario_asiento_fecha_comparador) == '') $buscador_cntb_diario_asiento_fecha_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_fecha_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_fecha_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Numero') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_numero' type='text' class='textbox' id='buscador_cntb_diario_asiento_numero' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.numero')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_numero_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.numero');
			if(trim($buscador_cntb_diario_asiento_numero_comparador) == '') $buscador_cntb_diario_asiento_numero_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_numero_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_numero_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_codigo' type='text' class='textbox' id='buscador_cntb_diario_asiento_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_codigo_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.codigo');
			if(trim($buscador_cntb_diario_asiento_codigo_comparador) == '') $buscador_cntb_diario_asiento_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cntb_diario_asiento_observacion' type='text' class='textbox' id='buscador_cntb_diario_asiento_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cntb_diario_asiento.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cntb_diario_asiento_observacion_comparador = $criterio->getComparadorDeCampo('cntb_diario_asiento.observacion');
			if(trim($buscador_cntb_diario_asiento_observacion_comparador) == '') $buscador_cntb_diario_asiento_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cntb_diario_asiento_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cntb_diario_asiento_observacion_comparador, 'textbox comparador') ?>
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

